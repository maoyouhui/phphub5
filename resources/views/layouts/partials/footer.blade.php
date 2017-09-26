<footer class="footer">
      <div class="container">
        <div class="row footer-top">

          <div class="col-sm-5 col-lg-5">

              <p class="padding-top-xsm">猫友会，是聚焦“人才回流、知识回流、创业回流“的公益性质湖北籍互联网社群，人才回流，搭建平台链接外地优秀人才和本地优秀公司；知识回流，引进业界前沿知识分享，并带动本地的知识分享氛围；创业回流，提供启动资金，帮助搭建团队，助创业者回流。</p>

              <span style="font-size:0.9em">
                  Powered by <a href="https://github.com/summerblue/phphub5" target="_blank" style="color:inherit">PHPHub</a>
              </span><br>
              <span style="font-size:0.9em">
                  Designed by <span style="color: #e27575;font-size: 14px;">❤</span> <a href="https://github.com/summerblue" target="_blank" style="color:inherit">Summer</a>
              </span>
          </div>

          <div class="col-sm-6 col-lg-6 col-lg-offset-1">

                  <div class="col-sm-4">
                    <h4>{{ lang('Site Status') }}</h4>
                    <ul class="list-unstyled">
                        <li>{{ lang('Total User') }}: {{ $siteStat->user_count }} </li>
                        <li>{{ lang('Total Topic') }}: {{ $siteStat->topic_count }} </li>
                        <li>{{ lang('Total Reply') }}: {{ $siteStat->reply_count }} </li>
                    </ul>
                  </div>

                </div>

          </div>
        </div>
        <br>
        <br>
      </div>
    </footer>
