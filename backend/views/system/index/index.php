<?php 
// echo '<pre>';print_r($this->params);exit();
?>
<section class="page-hd">
    <header>
        <h2 class="title"><i class="icon-home"></i>后台首页</h2>
    </header>
    <hr>
</section>

<div class="panel panel-default">
    <div class="panel-bd capitalize">
        PHP相关参数相关配置
    </div>
</div>

<table class="table table-bordered  mb-15 mt-15">
    <thead>
        <tr><th colspan="4" class="text-success">服务器参数</th></tr>
        <tr>
            <td>服务器域名/IP地址</td>
            <td>
                <?php 
                    if(isset($this->params['serverName']))
                    {
                        echo $this->params['serverName'];
                    } else { 
                        echo "";
                    }
                ?>
            </td>
        </tr>

        <tr>
            <td>服务器标识</td>
            <td>
                <?php 
                    if(isset($this->params['serverUname']))
                    {
                        echo $this->params['serverUname'];
                    } else { 
                        echo "";
                    }
                ?>
            </td>
        </tr>
        <tr>
            <td>服务器操作系统</td>
            <td>
                <?php 
                    if(isset($this->params['serverOs']))
                    {
                        echo $this->params['serverOs'];
                    } else { 
                        echo "";
                    }
                ?>
            </td>
        </tr>
     
        <tr>
            <td>服务器语言</td>
            <td>
                <?php 
                    if(isset($this->params['serverLanguage']))
                    {
                        echo $this->params['serverLanguage'];
                    } else { 
                        echo "";
                    }
                ?>
            </td>
        </tr>

        <tr>
            <td>服务器主机名</td>
            <td>
               <?php 
                    if(isset($this->params['serverHostName']))
                    {
                        echo $this->params['serverHostName'];
                    } else { 
                        echo "";
                    }
                ?>
            </td>
        </tr>

         <tr>
            <td>服务器端口</td>
            <td>
               <?php 
                    if(isset($this->params['serverDomain']))
                    {
                        echo $this->params['serverDomain'];
                    } else { 
                        echo "";
                    }
                ?>
            </td>
        </tr>

         <tr>
            <td>绝对路径</td>
            <td>
               <?php 
                    if(isset($this->params['serverRoot']))
                    {
                        echo $this->params['serverRoot'];
                    } else { 
                        echo "";
                    }
                ?>
            </td>
        </tr>
    </thead>
</table>





