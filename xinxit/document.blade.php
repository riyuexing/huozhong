
<!DOCTYPE html>
<html lang="zh">
<head>
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" >
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <!--<link rel="shortcut icon" href="img/favicon.ico"/>-->
    <link rel="icon" href="{{asset('img/ico1.ico')}}" type="image/x-icon">
    <title>火种天网系统-使用指南</title>
    <link rel="stylesheet" href="{{asset('css/common.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('css/element-ui.css')}}">
</head>
<body>
<div id="app" style="">
    <el-container>
        <el-aside width="280">
            <div aindex='1' @click="menuClick(1);menuClicka(1)" style="cursor:pointer;height: 45px;line-height: 45px;font-size: 16px;padding-left: 58px;margin-top: 0px;">QA-问题总结</div>
            <el-menu v-if="activeIndexa === 1" @click="handleClose"  class="el-menu-vertical-demo" style="border-right: none">
                <el-menu-item index="1" @click="menuClick(1)" style="padding-left: 80px;height: 32px;line-height: 32px;">
                    <span slot="title">一.软电话问题总结</span>
                </el-menu-item>
                <el-menu-item index="2" @click="menuClick(2)" style="padding-left: 80px;height: 32px;line-height: 32px;">
                    <span slot="title">二.电脑使用问题总结</span>
                </el-menu-item>
                <el-menu-item index="3"  @click="menuClick(3)" style="padding-left: 80px;height: 32px;line-height: 32px;">
                    <span slot="title">三.天网使用问题</span>
                </el-menu-item>
            </el-menu>
            <div aindex='2' @click="menuClick(4);menuClicka(2)" style="cursor:pointer;height: 45px;line-height: 45px;font-size: 16px;padding-left: 58px;margin-top: 0px;">对接流程</div>
            <el-menu v-if="activeIndexa === 2" class="el-menu-vertical-demo" style="border-right: none">
                <el-menu-item index="4" @click="menuClick(4)" style="padding-left: 80px;height: 32px;line-height: 32px;">
                    <span slot="title">1.订单信息修改 </span>
                </el-menu-item>
                <el-menu-item index="5" @click="menuClick(5)" style="padding-left: 80px;height: 32px;line-height: 32px;">
                    <span slot="title">2.支付截图上传失败</span>
                </el-menu-item>
                <el-menu-item index="6"  @click="menuClick(6)" style="padding-left: 80px;height: 32px;line-height: 32px;">
                    <span slot="title">3.改组</span>
                </el-menu-item>
                <el-menu-item index="7"  @click="menuClick(7)" style="padding-left: 80px;height: 32px;line-height: 32px;">
                    <span slot="title">4.补话单</span>
                </el-menu-item>
                <el-menu-item index="8"  @click="menuClick(8)" style="padding-left: 80px;height: 32px;line-height: 32px;">
                    <span slot="title">5.创建团报和转介绍数据</span>
                </el-menu-item>
                <el-menu-item index="9"  @click="menuClick(9)" style="padding-left: 80px;height: 32px;line-height: 32px;">
                    <span slot="title">6.考区不对</span>
                </el-menu-item>
                <el-menu-item index="10"  @click="menuClick(10)" style="padding-left: 80px;height: 32px;line-height: 32px;">
                    <span slot="title">7.装软件流程；</span>
                </el-menu-item>
                <el-menu-item index="11"  @click="menuClick(11)" style="padding-left: 80px;height: 32px;line-height: 32px;">
                    <span slot="title">8.账号相关问题</span>
                </el-menu-item>
            </el-menu>
            <div aindex='3' @click="menuClick(12);menuClicka(3)" style="cursor:pointer;height: 45px;line-height: 45px;font-size: 16px;padding-left: 58px;margin-top: 0px;">用户手册</div>
            <el-menu v-if="activeIndexa === 3" class="el-menu-vertical-demo" style="border-right: none">
                <el-menu-item index="12" @click="menuClick(12)" style="padding-left: 80px;height: 32px;line-height: 32px;">
                    <span slot="title">一、登录 </span>
                </el-menu-item>
                <el-menu-item index="13" @click="menuClick(13)" style="padding-left: 80px;height: 32px;line-height: 32px;">
                    <span slot="title">二、主页</span>
                </el-menu-item>
                <el-menu-item index="14"  @click="menuClick(14)" style="padding-left: 80px;height: 32px;line-height: 32px;">
                    <span slot="title">三、数据反馈页（工作台）</span>
                </el-menu-item>
                 <el-menu-item index="15"  @click="menuClick(15)" style="padding-left: 80px;height: 32px;line-height: 32px;">
                    <span slot="title">四、手机通讯监控</span>
                </el-menu-item>
            </el-menu>
        </el-aside>

        <el-main style="padding-left: 4%;">
            <div v-if="activeIndexb === 1" class="container">
                <div class="head-title">软电话问题总结</div>
                <div class="title">1.拨出电话时显示坐席或者sip账号异常；</div>
                <div class="content">
                    <p>解决办法：软电话重启（不是最小化，需在右下角软件处退出）如不行请联系网络管理员。</p>
                </div>
                <div class="img-container"><img src="{{asset('img/wendang/hz101.png')}}"></div>

                <div class="title">2.拔出去后没法接通，软电话没有显示正在拨打的记录；</div>
                <div class="content">
                    <p>解决办法：软电话重启详情见第一条。</p>
                </div>

                <div class="title">3.电话自己听不清对面声音；</div>
                <div class="content">
                    <p>解决办法：可能是电脑开启多个媒体源，相互抢硬件资源，关闭不用的语音软件。</p>
                </div>
                <div class="title">4.电话对面听不到自己声音；</div>
                <div class="content">
                    <p>解决办法：拔掉自己的耳机，等待右下角出现白框①，在重新插上耳机，然后重启软件，重启软件可能会出现图②的情况直接点close退出就可以了。</p>
                </div>
                <div class="img-container-bottom">
                        <img src="{{asset('img/wendang/hz102.png')}}">
                        <img src="{{asset('img/wendang/hz103.png')}}">
                </div>
                <div class="title">5.备注时提时“一分钟后重试，仍失败请提交网管”；</div>
                <div class="content">
                    <p>(1)确认自己打通电话并保证最后一通电话有人接听。</p>
                    <p>(2)可能存在延迟一分钟或两分钟重新尝试保存，如还不可以私发学员手机号到网络管理员并说明原因。（如：我刚才打通了不小心挂断了再打打不通了）</p>
                </div>
                <div class="img-container-bottom">
                        <img src="{{asset('img/wendang/hz104.png')}}">
                </div>
                <div class="title">6.反馈未通时提示“一分钟后重试，仍失败请提交网管”；</div>
                <div class="content">
                    <p>(1)确定该号码是自己5分钟内打过电话，而且电话没有打通；</p>
                    <p>(2)确实没打通但标记不上（通话记录），可再打一遍自己挂掉，尝试标记；</p>
                </div>
                <div class="title">7.提示“拨打电话请加拨0”；</div>
                <div class="content">
                    <p>(1)可直接提交给网管并说明原因；</p>
                </div>
                <div class="title">8.内部网关不可用；</div>
                <div class="content">
                    <p>(1)确认电话号码正确无误，重启软件后重新尝试。</p>
                </div>
                <div class="img-container-bottom">
                        <img src="{{asset('img/wendang/hz105.png')}}">
                </div>
                <div class="title">9.软件怎么都打不开；</div>
                <div class="content">
                    <p>(1)打开任务管理器（右键工具栏，启动任务管理器），进程（详见图③），找到eyeBeam.exe进程，右下角结束进程。</p>
                    <p>(2)重新打开软件即可解决。</p>
                </div>

                <div class="img-container-bottom">
                        <img src="{{asset('img/wendang/hz106.png')}}">
                </div>
                <div class="title">10.电话嘟嘟嘟；</div>
                <div class="content">
                    <p>方法：拨打其他电话</p>
                    <p>(1)如果其他所有电话都出现嘟嘟嘟，说明线路出现问题或者显号被封，请及时联系网络管理员，并说明情况；</p>
                    <p>(2)如果其他电话不出现嘟嘟嘟，说明该电话超出每天4遍的限制或者号段不支持，需要用本人手机给客户拨打电话，拨打完成后讲通话记录截图提交给网络管理员并说明需要补话单(2)如果其他电话不出现嘟嘟嘟，说明该电话超出每天4遍的限制或者号段不支持，需要用本人手机给客户拨打电话，拨打完成后讲通话记录截图提交给网络管理员并说明需要补话单。</p>
                    <p>(3)超过晚上9点软电话线路不可用</p>
                </div>
                <div class="title">11.提示“主被叫显号不能同时为空”</div>
                <div class="content">
                    <p>重启软件，天网系统退出重进，还不行联系网络管理员。</p>
                </div>
            </div>

            <div v-if="activeIndexb === 2" class="container">
                    <div class="head-title">电脑使用问题总结</div>
                    <div class="title">1.电脑网络突然没有；（网络问题需要带着相应工具，请大家配合节省时间）</div>
                    <div class="content">
                        <p>(1)确认是天网连接断掉还是电脑没网；</p>
                        <p>(2)确认右下角网络图标是否变叉，是否有感叹号；</p>
                        <p>(3)看一下网线接口是否亮灯；</p>
                    </div>
                    
    
                    <div class="title">2.电脑使用越来越卡，解决办法；</div>
                    <div class="content">
                        <p>(1)整合桌面文件到文件夹移动到d盘下面；</p>
                        <p>(2)确认自己电脑没有垃圾软件存在，例如“小鱼便签”、“光速搜索”、“传奇霸业”等类似软件，如有请按windows键(在ctrl键和alt键中间)-控制面板-程序下侧的卸载程序按照步骤依次卸载。</p>
                    </div>
                    <div class="img-container"><img src="{{asset('img/wendang/hz201.png')}}"> <p>可安装腾讯管家或360安全管家软件清理垃圾和整理内存。</p></div>
                    
            </div>

            <div v-if="activeIndexb === 3" class="container">
                    <div class="head-title">天网使用问题</div>
                    <div class="title">1.卡或者“502”、“504”；</div>
                    <div class="content">
                        <p>不要一直点击刷新，及时在群里说，等待技术处理。</p>
                    </div>
                    <div class="title">2.没有乐语记录</div>
                    <div class="content">
                        <p>如果数据没出现乐语记录，说明该数据是留言数据一般只包含工作年限和年龄等信息。</p>
                    </div>
    
                    <div class="title">3.订单提交失败</div>
                    <div class="content">
                        <p>（1）网速不行，检查网络；</p>
                        <p>（2）该条数据已提交过订单（即在定金的单子上定金补费用），将手机号报给出纳，出纳二次分配后，在二次分配的数据上创建新的定金补费订单。</p>
                    </div>
                    <div class="title">4.截图上传失败</div>
                    <div class="content">
                        <p>（1）订单编号成功显示，说明截图内存过大，需及时联系技术人员；</p>
                        <p>（2）显示订单失败。检查网络或者刷新重新录入订单信息；</p>
                    </div>
                    <div class="title">5.页面显示“the page has expired due to inactivity”或者“页面已过期”</div>
                    <div class="content">
                        <p>一般是服务器问题，需及时通知技术人员</p>
                    </div>
                    <div class="title">6.公海领取失败</div>
                    <div class="content">
                        <p>（1）该咨询师当天数据已达到上限，检查其数据是否已满60条；</p>
                        <p>（2）该数据在领取的一瞬间已被别人领取（没抢过别人），需要重新寻找数据领取；</p>
                    </div>
                    <div class="title">7.当天查流水时缺少一部分</div>
                    <div class="content">
                        <p>检查该单报名时间是否为当天 , 因为报名时间是以支付截图为准，如果报名时间不是当天则该单不会出现在今日流水中，本周流水同理；</p>
                    </div>
                    <div class="title">8.邮寄地址</div>
                    <div class="content">
                        <p>因地址信息不全，当出现客户提供的邮寄地址在系统中找不到时，请及时联系技术人员添加；</p>
                    </div>
                    <div class="title">9.已报名只有10条</div>
                    <div class="content">
                        <p>当进入已报名数据页面时，如果没选择查询条件，系统会默认给出10条数据，遇到这种情况请输入查询条件；</p>
                    </div>
                    <div class="title">10.页面时长，流水等没有实时更新；</div>
                    <div class="content">
                        <p>为减轻服务器压力，系统将流水，排名，时长等刷新时间定为10分钟，所属数据刷新时间为10秒钟；</p>
                        </div>
                    <div class="title">11.公海9点后才能领取，鹰眼9-10点无法查询数据</div>
                    <div class="content">
                        <p>咨询师领取公海数据需要在每天的9点之后，同时为了减少咨询师领取公海时的服务器压力，鹰眼设定为每天9:00-9:40间无法查询。</p>
                    </div>
                    <div class="title">12．天网首页回访数等指标和鹰眼不一致</div>
                    <div class="content">
                        <p>天网首页统计指标和鹰眼不一致时，主管和经理就以鹰眼统计的指标为准。</p>
                    </div>
            </div>
            <div v-if="activeIndexb === 4" class="container">
                    <div class="head-title">当咨询师录错订单信息后：</div>
                    <div class="title">（1）如果已提交出纳还未审核成功，可以向出纳说明原因让其稍后审核, 并及时修改信息，重新提交一次。</div>
                    <div class="title">（2）如果已提交出纳且审核成功，及时联系该学员对应的班主任并说明情况，让后端修改，是否扣款由质检决定。</div>
                    <div class="title">（3）如果该错误信息咨询师未发现而由后端发现，扣款按公司质检规定执行。</div>
            </div>
            <div v-if="activeIndexb === 5" class="container">
                    <div class="head-title">截图上传失败，有以下两种情况：</div>
                    <div class="title">（1）订单编号成功显示,但未提示支付截图上传成功，说明截图过大，（1）可使用电脑截图功能将该图片压缩，再提交；</div>
                    <div class="title">（2）显示订单失败。检查该订单是否为出纳已审核成功的单子（如在定金的单子上提交定金补费），如果是，联系出纳进行二次分配数据；</div>
                    <div class="title">（3）提示服务器错误。检查网络连接是否正常，如果网络不正常，及时联系网络管理员。</div>
            </div>
            <div v-if="activeIndexb === 6" class="container">
                    <div class="head-title">当咨询师需要换组时，需要进行如下步骤：</div>
                    <div class="title">（1）发送调组信息表（主管操作）</div>
                    <div class="content">
                        <p>主管需要提前2天将是否新人、咨询师姓名、原组别、新组别、原天网账号信息按Excel表格通过邮件形式发送给赵安炀、王佳奇、聂阳、徐华洲、张思宇、王佳、张正，</p>
                        <div class="img-container-bottom">
                            <img src="{{asset('img/wendang/hz2008.png')}}">
                    </div>
                    </div>
                    <div class="title">（2）删除账号</div>
                    <div class="content">
                        <p>由网络管理员在天网系统中将该咨询师之前账号信息移除。</p>
                    </div>
                    <div class="title">（3）新建账号</div>
                    <div class="content">
                        <p>主管应将咨询师在新组里的信息发送给网络管理员，由网络管理员创建新的天网账号。</p>
                    </div>
                    <div class="title">（4）绑显号</div>
                    <div class="content">
                        <p>网络管理员创建账号成功后，等待技术人员绑定显号；</p>
                    </div> 
                    <div class="title">（5）传新组班表 </div>
                    <div class="content">
                        <p>该咨询师新主管将其新的班表发给数据主管，数据主管上传班表。</p>
                    </div>
                    <div class="title">（6）重新配置软电话</div>
                    <div class="content">
                        <p>网络管理员将新的sip账号和密码发送给主管，主管为咨询师配置新的软电话账号；</p>
                    </div>
                    <div class="title">（7）迁未报名数据 </div>
                    <div class="content">
                        <p>主管通知技术人员将该咨询师老库里的未报名数据（已报名数据不会迁移到新组）迁至该咨询师数据库中。如果迁完后咨询师页面未显示数据，请使用迁入功能将所有数据迁移。迁入也没有，再及时联系技术人员。</p>
                    </div>
                    <div class="title">（8）月末流水核对（主管操作）</div>
                    <div class="content">
                        <p>咨询师此时计算的流水为对应时间段内的老组账号和新组账号流水总和，确定无误对接人力和财务。</p>
                    </div>
            </div>
            <div v-if="activeIndexb === 7" class="container">
                    <div class="head-title">补话单的情况只支持以下几种情况:</div>
                    <div class="title">（3）系统拨打电话出现嘟嘟嘟，通过自己手机拨打成功；</div>
                    <div class="title">（3）该电话系统拨打提示空号或其他，通过自己手机拨打成功；</div>
                    <div class="title">（3）其余情况由网络管理员自行判断；</div>
                    <div class="title">出现以上几种情况，将手机号，时长以及手机通话记录截图发送给网络管理员，网络管理员确认信息后可以补话单。</div>
            </div>
            <div v-if="activeIndexb === 8" class="container">
                    <div class="head-title">创建团报和转介绍数据</div>
                    <div class="title">当需要创建团报和转介绍数据时，将咨询号码与转介绍号码发送给出纳，由出纳创建新数据，请如实发送信息，出现错误及时联系技术人员。后期如因数据来源问题引发问题由咨询师本人承担</div>
            </div>
            <div v-if="activeIndexb === 9" class="container">
                    <div class="head-title">考区不对</div>
                    <div class="title">当出现客户提供的邮寄地址在系统中找不到时，请将正确地址信息与出错的位置及时发送给技术人员；</div>
            </div>
            <div v-if="activeIndexb === 10" class="container">
                    <div class="head-title">装软件流程</div>
                    <div class="title">（1）下载eyebeam软件（eyebeam软件可以在新天网测试群聊天记录中搜索）；</div>
                    <div class="img-container-bottom">
                            <img src="{{asset('img/wendang/hz1001.png')}}">
                    </div>
    
                    <div class="title">（2）将eyebeam压缩包另存到桌面，并解压到当前文件夹，然后在桌面找到一个eyebeam下载程序</div>
                    <div class="content">
                        <p>双击弹出安装框</p>      
                        <p>步骤为1.“下一步”，2.选择“我同意”然后下一步 3.“下一步”4.“下一步”5.“完成”（如果出现“重启计算机”等提示信息，选择稍后重启）</p>
                    </div>
                    <div class="img-container-bottom">
                            <img src="{{asset('img/wendang/hz1002.png')}}">
                    </div>
                    <div class="title">（3）在桌面上双击eyebeam图标</div>
                    <div class="img-container-bottom">
                            <img src="{{asset('img/wendang/hz1003.png')}}">
                    </div>
                    <div class="content">
                        <p>点击后弹出eyebeam软件，如果提示需要序列号。序列号为：</p>
                        <p>FU9E8UQKSFUNY73B2TH4CZB97NFTL4LM5TVR2PGE-6N7MYGH6EKU7WKJKKTNSNSQD</p>
                    </div>
                    <div class="title">（4）填完序列号后会弹出</div>
                    <div class="img-container-bottom">
                            <img src="{{asset('img/wendang/hz1004.png')}}">
                    </div>
                    <div class="content">
                        <p>如果没弹出点击</p>
                    </div>
                    
                    <div class="img-container-bottom">
                            <img src="{{asset('img/wendang/hz1005.png')}}">
                    </div>
                    <div class="content">
                        <p>红框按钮下面的“sip设定”按钮出现</p>
                    </div>
                    <div class="img-container-bottom">
                            <img src="{{asset('img/wendang/hz1006.png')}}">
                    </div>
                    <div class="content">
                        <p>点击“增加”出现：</p>
                    </div>
                    <div class="img-container-bottom">
                            <img src="{{asset('img/wendang/hz1007.png')}}">
                    </div>
                    <div class="content">
                        <p>填写sip账号，密码和IP地址，账号和密码找主管要，ip地址为：</p>
：                        <p>111.206.238.243:5160</p>
                    </div>
                    <div class="title">填写这5项信息，完成后点击“确定”，并“关闭”上一个弹框；</div>
                    <div class="img-container-bottom">
                            <img src="{{asset('img/wendang/hz1008.png')}}">
                    </div>
                    <div class="content">
                        <p>提示“就绪”或“注册成功”后绑定成功</p>
                    </div>
            </div>
            <div v-if="activeIndexb === 11" class="container">
                    <div class="head-title">账号相关问题</div>
                    <div class="title">例如新建账号，移除账号，查看软电话坐席及密码，绑显号，换显号等与账号有关的问题请联系网络管理员。</div>
                    <div class="title">人员调组或人员离职当天晚上网管必须移除老账号, 否则第二天会进入自动分配列表。</div>
            </div>
            <div v-if="activeIndexb === 12" class="container">
                <div class="head-title">登录</div>
                <div class="title"></div>
                <div class="content">
                    <p>登录页会展示当前日期，以及截止当前时间本月销售部门业绩排行前十的人员姓名及其流水，登录时需要输入用户名和密码，销冠展示：每个项目前七名进行轮播展示；（第一排基金,第二排消防）登陆系统：用户无法注册，由各部门主管代为创建；输入完成后点击”登录”按钮，认证成功后自动跳转至天网系统主页，详情如下图所示：</p>
                </div>
                <div class="img-container-bottom">
                        <img src="{{asset('img/wendang/hz1201.png')}}">
                </div>
                <div class="title"></div>
                <div class="content">
                    <p>登录页会展示当前日期，以及截止当前时间本月销售部门业绩排行前十的人员姓名及其流水，登录时需要输入用户名和密码，销冠展示：每个项目前七名进行轮播展示；（第一排基金,第二排消防）登陆系统：用户无法注册，由各部门主管代为创建；输入完成后点击”登录”按钮，认证成功后自动跳转至天网系统主页，详情如下图所示：</p>
                </div>
                <div class="img-container-bottom">
                        <img src="{{asset('img/wendang/hz1202.png')}}">
                </div>
            </div>
             <div v-if="activeIndexb === 13" class="container">
                <div class="head-title">主页</div>
                <div class="img-container-bottom">
                        <img src="{{asset('img/wendang/hz1301.png')}}">
                </div>
                <div class="title">主体功能展示：</div>
                <div class="img-container-bottom">
                        <img src="{{asset('img/wendang/hz1302.png')}}">
                        <p>主体功能区主要分为三个部分：头部功能区、中部功能区、底部功能区；</p>
                </div>
                <div class="title">头部功能区：</div>
                <div class="content">
                    <p>主要用于展示用户的个人业绩信息，依次为：</p>
                    <p>A.当月实际绩效；</p>
                    <p>B.今日成单（个数）/流水；</p>
                    <p>C.本月成单（个数）/流水；</p>
                    <p>D.目标/完成率；</p>
                    <p>E.背景图；</p>
                    <p>F.当前登录用户所属部门/小组的销售业绩前五名以及该成员在部门/小组内的排名。</p>
                网页版：<p>G.点击“用户文档”跳转到用户文档页面（包含流程，QA和用户文档），如图：</p>
                </div>
                <div class="img-container-bottom">
                    <img src="{{asset('img/wendang/hz1318.png')}}">
                </div>
                <div class="title">中部功能区:</div>
                <div class="content">
                    <p>主要用于展示用户的工作量信息，依次为：</p>
                    <p>A.首咨/回访；
                            首咨：系统当天分配给当前登录用户的新客户总数；
                            回访：当前登录用户当天沟通过的客户总数；</p>
                    <p>B.个数：当前登录用户当天打通的电话总数以及打过的电话总数；</p>
                    <p>C.时长：当前登录用户当天打通的电话总时长；</p>
                    <p>D.今日机会/未处理；
                            今日机会：当前登录用户当天沟通过的新客户总数；
                            未处理：当前登录用户当天未沟通过的新客户总数；</p>
                    <p>E.总机会：当前登录用户当月沟通过的新客户总数。</p>
                </div>
                <div class="title">底部功能区：</div>
                <div class="content">
                    <p>主要用于展示用户的客户数据信息，依次为：</p>
                    <p>A.首咨：系统分配时间在今天的客户数据；</p>
                    <p>B.当周回访：系统分配时间在本周的客户数据；</p>
                    <p>C.跨期回访：系统分配时间不在本周的客户数据；</p>
                    <p>D.即将过期；系统分配时间在三天前的客户数据；</p>
                    <p>E.公海数据；由数据主管分配的客户数据。</p>
                </div>
                <div class="img-container-bottom">
                    <p>该功能区每个栏目都可以点击展开按钮来查看具体客户信息，如下图所示：</p>
                    <img src="{{asset('img/wendang/hz1303.png')}}">
                </div>
                <div class="content">
                    <p>每个客户数据展示如下信息：</p>
                    <p>A.客户姓名；</p>
                    <p>B.客户咨询项目；</p>
                    <p>C.客户手机号；</p>
                    <p>D.客户咨询渠道；</p>
                    <p>E.预约跟访时间：当前登录用户与客户约定好的下次沟通时间；</p>
                    <p>F.分配时间：系统分配该客户给当前登录用户的时间；</p>
                    <p>G.反馈呼叫未通数：该客户未接电话的次数；</p>
                    <p>H.最后跟访时间：当前登录用户与客户的最后一次沟通时间；</p>
                    <p>I.备注：当前登录用户与客户的最后一次沟通内容；</p>
                </div>
                <div class="img-container-bottom">
                    <p>注意：如果当前登录用户在登录页勾选了“登录呼叫中心”，那么就可以直接通过点击客户手机号进行一键拨打，此时出现弹框，提示”是否拨出“，如下图所示：</p>
                    <img src="{{asset('img/wendang/hz1304.png')}}">
                    <p>点击“确定”按钮，提示“请求成功”，实现电话自动拨打，如下图所示：</p>
                    <img src="{{asset('img/wendang/hz1305.png')}}">
                    <p>注意：一键拨打功能需要在PC或手机终端提前下载电话软件，并绑定电话运营商提供的账号密码和通话线路。</p>
                </div>
                <div class="content">
                    <p>点击名片可以跳转至该名片对应的工作台；</p>
                </div>
                <div class="title">头部功能栏功能展示:</div>
                <div class="content">
                    <p> 分为公海数据、已报名、订单查询、个人信息、修改密码、退出、机会列表查询，如下图所示：</p>
                </div>
                <div class="img-container-bottom">
                    <img src="{{asset('img/wendang/hz1306.png')}}">
                </div>
                <div class="title">（1）公海数据</div>
                <div class="img-container-bottom"><p>点击“公海数据”跳转到公海数据页面，如图：</p>
                    <img src="{{asset('img/wendang/hz1307.png')}}"><p>此时数据为空，选择查询条件后点击“查询”按钮，数据出现，如图：</p>
                    <img src="{{asset('img/wendang/hz1308.png')}}">
                </div>
                <div class="title">（2）已报名</div>
                <div class="img-container-bottom"><p>点击“已报名”跳转到已报名数据页面，如图：</p>
                    <img src="{{asset('img/wendang/hz1309.png')}}"><p>进入页面后默认展示10条数据，选择条件后查询，10条数据限制取消，如图所示：</p>
                    <img src="{{asset('img/wendang/hz1310.png')}}"><p>选中一条数据，可为该条数据新建工单，该工单信息会传递给后端教务，以便解决学员遇到的问题：</p>
                    <img src="{{asset('img/wendang/hz1311.png')}}"><p>点击“新建工单”，会出现如下图所示的弹框，填写内容，确认无误后提交：</p>
                    <img src="{{asset('img/wendang/hz1312.png')}}">
                </div>
                <div class="title">（3）订单查询</div>
                <div class="img-container-bottom"><p>点击“订单查询”跳转到订单查询页面，如图：</p>
                    <img src="{{asset('img/wendang/hz1313.png')}}">
                </div>
                <div class="content">
                    <p>该页面会记录报单状态为未审核通过的订单及相关信息和未通过原因，用户可以根据这些信息修改未通过的订单；</p>
                </div>
                <div class="title">（4）个人信息</div>
                <div class="img-container-bottom"><p>点击“个人信息”会弹出“个人信息”弹框，如图所示：</p>
                    <img src="{{asset('img/wendang/hz1314.png')}}"><p>用户可以在这里上传自己的头像。</p>
                </div>
                <div class="title">（5）修改密码</div>
                <div class="img-container-bottom"><p>点击“修改密码”会弹出“修改密码”弹框，如图所示：</p>
                    <img src="{{asset('img/wendang/hz1315.png')}}">
                </div>
                <div class="content">
                    <p>用户可以在这里修改自己的密码，如果忘了自己的密码是什么，需要向网络管理员说明，网络管理员可以将密码重置为123456，然后用户自己再进行修改。</p>
                </div>
                <div class="title">（6）退出</div>
                <div class="content">
                    <p>点击“退出”按钮系统会退出至登陆页面；</p>
                </div>
                <div class="title">（7）机会列表</div>
                <div class="img-container-bottom">
                    <img src="{{asset('img/wendang/hz1316.png')}}"><p>可以直接在输入栏中输入手机号，然后点击搜索按钮进行搜索，也可以直接点击搜索按钮进入机会列表页面中查询，如下图所示：</p>
                </div>
                <div class="img-container-bottom">
                    <img src="{{asset('img/wendang/hz1317.png')}}"><p>输入查询条件后点击查询按钮，就会得到所有符合要求的数据，如果该数据属于自己，可以数据该数据进入工作台，不属于自己则无法进入；</p>
                </div>
            </div>
            <div v-if="activeIndexb === 14" class="container">
                    <div class="head-title">三、数据反馈页（工作台）</div>
                    <div class="content">
                        <p>数据反馈页是用于展示并保存客户信息或各种反馈记录，如下图所示：</p>
                    </div>
                    <div class="img-container-bottom">
                        <img src="{{asset('img/wendang/hz1401.png')}}">
                        <img src="{{asset('img/wendang/hz1402.png')}}">
                    </div>
                    <div class="title">数据反馈页上半部分主要展示学员姓名、工作年限和学员性别等基本信息</div>
                    <div class="content">
                        <p>功能依次为：“返回”，“放弃”，“流转历史”，“创建订单”，“反馈无效”，“咨询记录”，“确定”。</p>
                    </div>
                    <div class="title">（1）返回</div>
                    <div class="content">
                        <p>点击“返回”后返回到天网主页。</p>
                    </div>
                    <div class="title">（2） 放弃</div>
                    <div class="img-container-bottom">
                        <p>点击“放弃”按钮弹出弹框，提示“是否确定放弃？”如下图所示：</p>
                        <img src="{{asset('img/wendang/hz1403.png')}}">
                    </div>
                    <div class="img-container-bottom">
                        <p>点击“确定”后放弃本条客户数据，提示“放弃成功”，1秒后跳转到天网系统主页，如下图所示：</p>
                        <img src="{{asset('img/wendang/hz1404.png')}}">
                        <p>注意：如果本条客户数据在天网系统主页属于首咨类型，则无法放弃。</p>
                    </div>
                    <div class="title">（3） 流转历史</div>
                    <div class="img-container-bottom">
                        <p>点击“流转历史”按钮后弹出弹框，可以获取当前客户数据在天网系统内的流转历史，如下图所示：</p>
                        <img src="{{asset('img/wendang/hz1405.png')}}">
                    </div>
                    <div class="title">（4） 创建订单</div>
                    <div class="img-container-bottom">
                        <p>创建订单是为当前登录用户记录客户购买的课程产品，核实客户个人信息，提交客户支付截图而设置的功能，以便于对已成交客户进行后续服务的开展，当订单所需客户信息不全时，会出现如下图所示的提示信息：</p>
                        <img src="{{asset('img/wendang/hz1406.png')}}">
                        <p>注意：姓名，性别，学历，行业，微信，邮箱，工作年限不能为空和无且至少有一条沟通记录；</p>
                    </div>
                    <div class="img-container-bottom">
                        <p>当订单所需的客户信息完整无误时，会弹出“创建订单”弹框，用户需根据页面提示如实填写订单信息，如下图所示：</p>
                        <img src="{{asset('img/wendang/hz1407.png')}}">
                    </div>
                    <div class="img-container-bottom">
                        <p>点击“选择图片”后，出现上传截图弹框，当前登录用户需上传客户提供的支付截图并填写该支付截图内对应的收款人，收款方式及支付金额，支付金额必须如实填写，如下图所示：</p>
                        <img src="{{asset('img/wendang/hz1408.png')}}">
                        <p>支付截图上传完毕，点击创建订单弹框内的“确定”按钮，提示“提交成功”，此时订单信息成功保存。</p>
                    </div>
                    <div class="content">
                        <p>注意：</p>
                        <p>1.带*号前缀的信息为必填项，不填则无法提交；</p>
                        <p>2.选择“报名班型”后“班型价格”自动计算，公式为：班型价格+代报名费-折扣；</p>
                        <p>3.手机号和身份证号必须按照正确格式填写，否则无法提交；</p>
                        <p>4.当需要使用对应折扣的优惠券时，点击“优惠券”按钮弹出弹框，输入优惠券码即可享受对应折扣；每个优惠券只能使用一次 ，已过期优惠券或已使用过的优惠券都无法再次使用。</p>
                    </div>
                    <div class="title">（5） 反馈无效</div>
                    <div class="img-container-bottom">
                        <p>反馈无效是用于当客户电话未接通时，当前登录用户保存该未接通情况，以及展示该客户历史未接通情况的功能，如下图所示：</p>
                        <img src="{{asset('img/wendang/hz1409.png')}}">
                        <p>选择“反馈呼叫未通”并填写备注后，点击“确定”按钮，即可保存本次未接通记录。</p>
                    </div>
                    <div class="title">（6） 咨询记录</div>
                    <div class="content">
                        <p>“咨询记录”功能是用于展示该客户在天网系统内所有的历史沟通记录，以便于当前登录用户了解该客户的个人情况及对公司每个产品的购买能力和意向度，可以更好的向客户介绍产品。提升客户对公司的信任度，增加该客户成交的几率。当点击“咨询记录”按钮后，“咨询记录”按钮会消失，且历史聊天记录会全部展示出来。如下图所示：</p>
                    </div>
                    <div class="img-container-bottom">
                        <img src="{{asset('img/wendang/hz1410.png')}}">
                    </div>
                    <div class="title">（7） 确定</div>
                    <div class="img-container-bottom">
                        <p>“确定”按钮是用于提交客户个人基本信息，保存当前沟通记录以及预约下次沟通时间的功能，点击确定显示“提交成功”，如下图所示：</p>
                        <img src="{{asset('img/wendang/hz1411.png')}}">
                    </div>
                    <div class="content">
                        <p>注意：提交时，带*号前缀的信息为必填项，即：“工作年限”，“学员性别”，“学历”，“所在行业”，“探需基本信息”（大于15个字），“推荐班型”，“下次回访”不能为空，否则无法提交；</p>
                    </div>
                    <div class="title">（7） 确定</div>
                    <div class="img-container-bottom">
                        <p>“确定”按钮是用于提交客户个人基本信息，保存当前沟通记录以及预约下次沟通时间的功能，点击确定显示“提交成功”，如下图所示：</p>
                        <img src="{{asset('img/wendang/hz1411.png')}}">
                    </div>
                    <div class="content">
                        <p>注意：提交时，带*号前缀的信息为必填项，即：“工作年限”，“学员性别”，“学历”，“所在行业”，“探需基本信息”（大于15个字），“推荐班型”，“下次回访”不能为空，否则无法提交；</p>
                    </div>
                    <div class="title">数据反馈页下半部分主要展示报名信息、首资记录，咨询记录和乐语聊天记录等与客户信息有关的记录；</div>
                    <div class="img-container-bottom">
                        <img src="{{asset('img/wendang/hz1411.png')}}">
                    </div>
                    <div class="content">
                        <p>涉及到通话记录的地方例如首资记录，咨询记录，还会有通话录音的下载按钮，点击后可以下载该录音文件；</p>
                    </div>
                </div>
                <div v-if="activeIndexb === 15" class="container gggg">
        <div class="head-title">手机通讯监控</div>
        <div class="head-title">一、app说明：</div>
        <div class="content">
            <p>手机监控软件，是监控咨询师/班主任(工作手机)与客户电话通话记录的软件。当软电话线路不可用的情况下可使用工作手机拨打客户电话，时长和录音也将会被统计。</p>
        </div>
        <div class="head-title">二、注意事项：</div>
        <div class="content">
            <p>1、工作手机不可拨打私人电话，若被识别为私人电话，则将自动挂断；如下图所示。</p>
        </div>
        <div class="img-container-bottom">
            <img src="{{asset('img/wendang/hz1501.png')}}">
        </div>
        <div class="content">
            <p>2、工作手机打电话必须保证网络稳定且通畅，否则该电话将自动挂断；如下图所示。</p>
        </div>
        <div class="img-container-bottom">
            <img src="{{asset('img/wendang/hz1502.png')}}">
        </div>
        <div class="content">
            <p>3、手机一天内拨打同一电话号码三次未接通，拨打第四次时将自动挂断。如下图所示。</p>
        </div>
        <div class="img-container-bottom">
            <img src="{{asset('img/wendang/hz15025.png')}}">
        </div>
        <div class="content">
            <p>4、成功安装完通信监测app后，不允许卸载，若私自卸载，再次安装时，需输入秘钥才能使用，若失误卸载，请联系技术人员问询秘钥。如下图所示。</p>
        </div>
        <div class="img-container-bottom">
            <img src="{{asset('img/wendang/hz1503.png')}}">
        </div>
        <div class="head-title">三、安装步骤：</div>
        <div class="content">
            <p>1.将CommunicationMonitor_1.0.apk安装到Android5/6/7/8系统的手机(以下均以小米红米6A为例) ，  如下图点击----”安装”</p>
        </div>
        <div class="img-container-bottom">
            <img src="{{asset('img/wendang/hz1504.png')}}">
        </div>
        <div class="content">
            <p>2.安装成功后，点击”打开”, 如下图所示</p>
        </div>
        <div class="img-container-bottom">
            <img src="{{asset('img/wendang/hz1505.png')}}">
        </div>
        <div class="content">
            <p>3.再将所有应用权限弹框点击允许按钮。如下图所示</p>
        </div>
        <div class="img-container-bottom">
            <img src="{{asset('img/wendang/hz1506.png')}}">
        </div>
        <div class="content">
            <p>4.点击HOME键 ,返回手机主页，如下图所示: </p>
        </div>
        <div class="img-container-bottom">
            <img src="{{asset('img/wendang/hz1507.png')}}">
        </div>
        <div class="content">
            <p>5.再点击设置 -> 授权管理 -> 应用权限管理 -> 应用管理 -> 通信监测，如下图所示： </p>
        </div>
        <div class="img-container-bottom">
            <img src="{{asset('img/wendang/hz1508.png')}}">
            <img src="{{asset('img/wendang/hz1509.png')}}">
            <img src="{{asset('img/wendang/hz1510.png')}}">
        </div>
        <div class="content">
            <p>6.将通信监测APP的 所有权限设置为允许,开机自启动也要打开。(备注：只要是没有绿色√的全部修改成允许) </p>
        </div>
        <div class="img-container-bottom">
            <img src="{{asset('img/wendang/hz1511.png')}}">
            <img src="{{asset('img/wendang/hz1512.png')}}">
        </div>
         <div class="content">
            <p>7.设置手机通话自动录音。</p>
            <p>7.1、点击HOME键 ，返回到手机桌面，点击“电话”按钮，进入手机拨打电话界面。</p>
        </div>
        <div class="img-container-bottom">
            <img src="{{asset('img/wendang/hz1513.png')}}">
        </div>
        <div class="content">
            <p>7.2、点击下图所示中的按钮。</p>
        </div>
        <div class="img-container-bottom">
            <img src="{{asset('img/wendang/hz1514.png')}}">
        </div>
        <div class="content">
            <p>7.3、点击“通话设置”，如下图所示。</p>
        </div>
        <div class="img-container-bottom">
            <img src="{{asset('img/wendang/hz1515.png')}}">
        </div>
        <div class="content">
            <p>7.4、点击“通话录音”，如下图所示。</p>
        </div>
        <div class="img-container-bottom">
            <img src="{{asset('img/wendang/hz1516.png')}}">
        </div>
        <div class="content">
            <p>7.5、点击“自动录音”，并选择录音内容为“所有通话”，如下图所示。</p>
        </div>
        <div class="img-container-bottom">
            <img src="{{asset('img/wendang/hz1517.png')}}">
        </div>
        <div class="content">
            <p>8.点击HOME键 ，返回到手机桌面，点击通信监测APP， 如下图所示:</p>
        </div>
        <div class="img-container-bottom">
            <img src="{{asset('img/wendang/hz1518.png')}}">
        </div>
        <div class="content">
            <p>9.输入该手机的本机号码和咨询师的sip号码，不要输错。（注：咨询师离职， 新咨询师到岗只需要重新设置sip号）</p>
        </div>
        <div class="img-container-bottom">
            <img src="{{asset('img/wendang/hz1519.png')}}"><img src="{{asset('img/wendang/hz1520.png')}}"><img src="{{asset('img/wendang/hz1521.png')}}"><img src="{{asset('img/wendang/hz1522.png')}}">
        </div>
        <div class="content">
            <p>10.重启通信监控app：点击任务进程按钮，关闭通信监控APP ， 再重新启动：</p>
        </div>
        <div class="content">
            <p>11.测试通信监控app，打一通电话 ，无论是否打通（注意：请保证手机开启了4G或者WiFi网络），都将弹出提示框。如下图所示：</p>
        </div>
        <div class="img-container-bottom">
            <img src="{{asset('img/wendang/hz1523.png')}}">
        </div>
        <div class="content">
            <p>12.若打完电话没有上述提示框弹出，需要重新启动通信监测APP。（注意：如果不小心关闭通信监控APP，请务必重新启动）</p>
        </div>
        <div class="content">
            <p>13.常见问题:</p>
            <p>13.1 刚开机的 1 分钟内由于手机需要各种初始化操作 , 有可能无法获取到通话记录, 此时可以等待开机完成或者手动开启通信监控APP，再打电话</p>
            <p>13.2 手机突然之间无法获取到通话记录的情况, 可能是手机开启的后台程序过多, 导致通信监控APP进程自动休眠, 此时也需要重启软件</p>
            <p>13.3 通信监控APP无法打开的情况,需要重启手机或重装通信监控APP</p>
        </div>
        <div class="head-title">总结： </div>
        <div class="content">
            <p>	1 ， 安装</p>
            <p>	2 ， 开启通信监控APP各种应用权限</p>
            <p>	3 ， 绑定手机号和sip号</p>
            <p>	4 ， 重启软件</p>
            <p>	5 ， 打电话测试是否有弹出框</p>
            <p>	6 ， APP功能异常就重新启动APP或工作手机来解决</p>
        </div>
    </div>
        </el-main>
    </el-container>
</div>
</body>
<script src="{{asset('js/vue.min.js')}}"></script>
<script src="{{asset('js/jquery-1.11.3.min.js')}}"></script>
<script src="{{asset('js/element-ui.js')}}"></script>

<script>
    new Vue({
        el: '#app',
        data: function() {
            return {
                activeIndexb: 1,
                activeIndexa: 1
                        }
        },
        methods: {
            menuClick(index) {
                this.activeIndexb = index
                console.log(this.activeIndex);
            },
            handleNodeClick(data) {
                console.log(this);
            },
            menActive(index){
                console.log($('li[role=menuitem]'));
                $('li[role=menuitem]').each(function(index,el){
                    console.log($(el).attr('class','el-menu-item'))
                })
            },
            menuClicka(aindex) {
                this.activeIndexa = aindex
                console.log(this.activeIndexa);
            },
            handleClose(key, keyPath) {
                console.log(key, keyPath);
            }
        }
    })
</script>
</html>
