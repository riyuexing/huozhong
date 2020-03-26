/*
 * @file: 首页
 */

$(function() {
    if (window.util.isLtIE10()) {
        $('input, textarea').placeholder();
    }
    if (window.util.isIE8()) {
        $('.index-videoLink').hide();
    }
// 渲染职业价值模块新闻列表
    function renderTeacherUl(ul, newsData) {
        ul.append($(
            '<li class="index-teacherNewLi">\n' +
            '<a href="showContentdo.html?id=' + newsData.id + '" class="index-teacherNewLink clearfix">' +
            '<span class="dis-inlineBlock fl">' + newsData.title + '</span>\n' +
            '<span class="dis-inlineBlock fr fs12">' + newsData.publishDate + '</span>\n' +
            '</a>\n' +
            '</li>\n'
        ));
    }

    var $window = $(window);

// 全屏滚动
    $('#indexFullPage').fullpage({
        navigation: true
    });

// 首屏轮播
    $('#indexCarousel').carousel({
        interval: 4000
    });
    $('.index-carousel').find('.item').height($window.height() *0.618);

    // 职业价值点亮者 - Ajax
    // $.ajax({
    //     type: "GET",
    //     url: "http://cms.haixue.com//api/indexTeacherNews?categoryIds=29,30,31,32,33,34&sizeNews=6",
    //     dataType: 'jsonp',
    //     processData: false,
    //     cache: false,
    //     success: function(res) {
    //         if (res.code!=0) return;

    //         var teacherNews = res.teacherNews,
    //             i;

    //         for (i=0; i<teacherNews.length; i++) {
    //             var $profession = $('.index-teacherNews').eq(i),
    //                 teacherNew = teacherNews[i],
    //                 j;
    //             //$('.j_moreTeacher').attr('href', '/indexTeacher/list.do?id=' + teacherNew.categoryId);

    //             for (j=0; j<3; j++) {
    //                 renderTeacherUl($profession.find('.index-teacherNewsList').eq(0), teacherNew.teacherNewsData[j]);
    //             }

    //             for (j=3; j<6; j++) {
    //                 renderTeacherUl($profession.find('.index-teacherNewsList').eq(1), teacherNew.teacherNewsData[j]);
    //             }
    //         }
    //     },
    //     error: function(a, b, c) {
    //         console.log(a);
    //         console.log(b);
    //         console.log(c);
    //         console.log('----> 职业价值点亮者 请求失败');
    //     }
    // });

    // 登录交互 - 事件绑定
    $('.index-loginInput')
        .on('focus', function() {
            var $this = $(this),
                $img = $this.prevAll('.index-loginIcon'),
                imgSrc = $img.attr('src');

            $img.attr('src', imgSrc.slice(0, -4) + '-crt.png');
        })
        .on('blur', function() {
            var $this = $(this),
                $img = $this.prevAll('.index-loginIcon'),
                imgSrc = $img.attr('src');

            $img.attr('src', imgSrc.slice(0, -8) + '.png');
        });

    // 职业价值点亮者轮播 - 事件绑定
    $('.index-teacherItem').on('click', function() {
        var $this = $(this),
            $prevItem = $('.index-teacherItem--crt'),
            index = $this.index(),
            prevIndex = $prevItem.index(),
            $prevIcon = $('.index-teacherItemIcon').eq(prevIndex),
            $crtIcon = $('.index-teacherItemIcon').eq(index);
            console.log(prevIndex,$prevIcon,$crtIcon);
            var ic  = index+11,ia=prevIndex+5;
        $('.index-teacherLi').removeClass('index-teacherLi--crt').addClass('dis-none');
        $('.index-teacherLi').eq(index).removeClass('dis-none').addClass('index-teacherLi--crt');
        $prevItem.removeClass('index-teacherItem--crt');
        $this.addClass('index-teacherItem--crt');
        $prevIcon.attr('src', 'img/icon'+ia+'.png');
        $crtIcon.attr('src', 'img/icon'+ic+'.png');
    });
    $('.index-teacherSwitch').on('click', function() {
        var $this = $(this),
            $crtItem = $('.index-teacherItem--crt'),
            crtIndex = $crtItem.index();
            
        if ($this.hasClass('index-teacherSwitch--left')) { // 左切换
            var prevIndex = crtIndex === 0 ? 5 : crtIndex - 1,
                $crtIcon = $('.index-teacherItemIcon').eq(crtIndex),
                $prevIcon = $('.index-teacherItemIcon').eq(prevIndex);


            $('.index-teacherLi').eq(crtIndex).addClass('dis-none').removeClass('index-teacherLi--crt');
            $('.index-teacherLi').eq(prevIndex).removeClass('dis-none').addClass('index-teacherLi--crt');
            $('.index-teacherItem').eq(crtIndex).removeClass('index-teacherItem--crt');
            $crtIcon.attr('src', 'img/icon11.png');
            $('.index-teacherItem').eq(prevIndex).addClass('index-teacherItem--crt');
            $prevIcon.attr('src', 'img/icon12.png');
        } else { // 右切换
            var nextIndex = crtIndex === 5 ? 0 : crtIndex + 1,
                $crtIcon = $('.index-teacherItemIcon').eq(crtIndex),
                $nextIcon = $('.index-teacherItemIcon').eq(nextIndex);

            $('.index-teacherLi').eq(crtIndex).addClass('dis-none').removeClass('index-teacherLi--crt');
            $('.index-teacherLi').eq(nextIndex).removeClass('dis-none').addClass('index-teacherLi--crt');
            $('.index-teacherItem').eq(crtIndex).removeClass('index-teacherItem--crt');
            $crtIcon.attr('src', 'img/icon12.png');
            $('.index-teacherItem').eq(nextIndex).addClass('index-teacherItem--crt');
            $nextIcon.attr('src', 'img/icon12.png');
        }
    });

    // 职业价值点亮者课程咨询 - 事件绑定
    $('.index-teacherAsk')
        .on('mouseenter', function() {
            $(this).find('.index-teacherAskIcon').attr('src', '../../newIndex/img/index/icon-teacher-ask-hover@2x.png');
        })
        .on('mouseleave', function() {
            $(this).find('.index-teacherAskIcon').attr('src', '../../newIndex/img/index/icon-teacher-ask@2x.png');
        });



    function handleLogin() {
        var $hint = $('.index-loginHint'),
            $input = $('.index-loginInput'),
            $inputUser = $('.index-loginInputUser'),
            $inputPwd = $('.index-loginInputPwd'),
            class4Err = 'index-loginInput--err';

        if (!$inputUser.val()) {
            $inputUser.addClass(class4Err);
            $hint.text('用户名不能为空');
        } else if (!$inputPwd.val()) {
            $inputPwd.addClass(class4Err);
            $hint.text('密码不能为空');
        } else {
            var $checkbox = $('#indexAutoLogin');

            $.ajax({
                type: 'POST',
                url: SERVER_CONTEXT + "/doLogin.do",
                data: {
                    j_username: $inputUser.val(),
                    j_password: $inputPwd.val(),
                    _spring_security_remember_me: $checkbox[0].checked ? 'on' : 'off'
                },
                dataType: 'json',
                success: function (res) {
                    if (res.success) { // 登录成功
                        if (res.url) {
                            window.location.href = SERVER_CONTEXT + res.url;
                        } else {
                            window.location.href = SERVER_CONTEXT + "/home/home.do";
                        }
                    } else {
                        if(res.isAppeal==false){
                            $input.addClass(class4Err);
                            $hint.text('用户名或密码错误，请重新输入');
                        }else {
                            $input.addClass(class4Err);
                            $hint.html('由于安全原因，该账号被禁用<a href="javascript:void(0)" style="text-decoration: underline" onclick="appealAccount()">点击申诉</a>');
                        }

                    }
                },
                error: function (err) {
                    console.log(err);
                }
            });

            // 删除web引流个人中心遮罩的localStorage
            window.localStorage.removeItem("isShowErwm");
        }
    }



    // 登录 - 表单验证
    $('.index-loginBtn--login').on('click', handleLogin);
    $('.index-loginInput').on('keyup', function(e) {
        if (e.keyCode !== 13) {
            return false;
        }
        handleLogin();
    });
    $('.index-loginInput').on('focus', function() {
        var $hint = $('.index-loginHint');

        $('.index-loginInput').removeClass('index-loginInput--err');
        $hint.text('');
    });
});

var isAppeal= false;

function appealAccount() {

    var $inputUser = $('.index-loginInputUser');

    if (!$inputUser.val()) {
        $inputUser.addClass(class4Err);
        $hint.text('用户名不能为空');
    }
    if(isAppeal==true){

        return;
    }
    isAppeal = true;
    setTimeout(function () { isAppeal = false }, 5000);
    $.ajax({
        type: 'POST',
        url: SERVER_CONTEXT + "/appealAccount/appeal.do",
        data: {
            userName: $inputUser.val(),
        },
        dataType: 'json',
        success: function (res) {
            if (res.appealResult===true) {

                layui.use(['layer', 'form'], function(){
                    var layer = layui.layer;
                    layer.open({
                        type:0,
                        title:false,
                        content:'\<\div>' +
                                    '\<\p style="margin-bottom: 10px;height: 30px;line-height: 30px;font-size: 20px;color: #19CC9C ;">' +
                                        '\<\img src="/newIndex/img/appealSuccess.png" style="width:20px;height:20px;margin-right:12px;vertical-align: middle;" \/>' +
                                        '我们已经收到您的申诉' +
                                    '\<\/p>' +
                                    '\<\p style="margin-left:32px;font-size:14px;color:#212121 ;line-height:18px">嗨学工作人员会在7个工作日内联系您，请保持电话畅通。\<\/\p>' +
                                '\<\/div>',
                        closeBtn: 0
                    });

                });

            }else {
                layui.use(['layer', 'form'], function(){
                    layui.use(['layer', 'form'], function(){
                        var layer = layui.layer;
                        layer.open({
                            type:0,
                            title:false,
                            content:'\<\div>' +
                            '\<\p style="margin-bottom: 10px;height: 30px;line-height: 30px;font-size: 16px;color: #333 ;">' +
                            '\<\img src="/newIndex/img/appealError.png" style="width:20px;height:20px;margin-right:12px;vertical-align: middle;" \/>' +
                            '申诉失败' +
                            '\<\/p>' +
                            '\<\p style="margin-left:32px;font-size:14px;color:#999 ;line-height:18px">'+'由于未知原因，您的申诉申请失败了'+'\<\/\p>' +
                            '\<\/div>',
                            closeBtn: 0
                        });

                    });

                });
            }
        }
    });


};

