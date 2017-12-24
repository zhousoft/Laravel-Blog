 {{--  <div class="row">  --}}
    <div class="col-xs-12">
        <div class="box box-solid" style="padding: 10px;">
            <h3>系统基本信息</h3>
            <ul>
                <li>
                    <label>操作系统：</label><span>{{ PHP_OS }}</span>
                </li>
                <li>
                    <label>运行环境：</label><span>{{ $_SERVER ['SERVER_SOFTWARE'] }}</span>
                </li>
                <li>
                    <label>上传附件限制：</label><span>{{ get_cfg_var ("upload_max_filesize")?get_cfg_var ("upload_max_filesize"):"不允许上传附件" }}</span>
                </li>
                <li>
                    <label>服务器时间：</label><span>{{ date('Y年m月d日 H时m分s秒') }}</span>
                </li>
                <li>
                    <label>服务器域名/IP：</label><span>{{ $_SERVER ['SERVER_NAME'] }} [{{ $_SERVER ['SERVER_ADDR'] }}]</span>
                </li>
                <li>
                    <label>Host：</label><span>{{ $_SERVER ['SERVER_ADDR'] }}</span>
                </li>
            </ul>
        </div>
    </div>
{{--  </div>  --}}