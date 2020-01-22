
    <div class="c-project__body">
        <p>Moovweb is an Enterprise software solution for delivering customized mobile experiences from a single
            codebase.</p>
        <p>As lead product designer, I collaborated with the VP of Product and various engineers to create and design a
            new web property for Moovweb developers.
            <ul class="o-tabs" data-tab>
                <li class="o-tabs__tab-title  active">
                    <a href="#overview">
                        <?php echo $overview_tab ?>
                    </a>
                </li>
                <li class="o-tabs__tab-title ">
                    <a href="#process">
                        <?php echo $process_tab ?>
                    </a>
                </li>
            </ul>
            <ul class="o-tabs__tab-content">
                <li class="active"  id="overviewTab">
                    <div class="overview-content">
                        <p>The <a href="http://developer.moovweb.com" target="_blank">Moovweb Developer Center</a> is
                            the primary hub for software downloads, documentation, and tutorials for developers using
                            the Moovweb platform.</p>
                        <h4><?php echo $overview_section_a; ?></h4>
                        <p>When Moovweb hired me to redesign the Control Center, one of the goals was to simplify the
                            user experience by focusing on providing a streamlined interface for managing Moovweb
                            projects in the cloud. This required moving the onboarding guides and all the
                            developer-related content to a separate site that didn't exist yet.
                        </p>
                        <h4><?php echo $overview_section_b; ?></h4>
                        <!-- c-project-sidebar -->
                        <?php include('project-sidebar.php') ?>
                        <p>I collaborated with product management on content development, devised a clear and logical
                            information architecture, and produced many iterations of visual and interface design. I
                            also worked closely with the Ruby on Rails developers to build a prototype of the app, and
                            finally the production code that is present today.
                        </p>
                        <h4><?php echo $overview_section_c; ?></h4>
                        <p>The design and creation of the Developer Center allowed Moovweb to clearly separate the
                            content <em>about</em> the platform tools from the tools themselves, and allowed product
                            management to take advantage of the flexibility of a stand-alone property for delivering
                            developer-oriented content in a more appropriate format.
                        </p>
                    </div>
                </li>
                <li class=""  id="processTab">
                    <!-- c-project-sidebar -->
                    <div class="overview-content">
                        <h3><?php echo $casetitle1 ?></h3>
                        <p>
                            <?php echo $casesub1 ?>
                        </p>
                        <a name="information-architecture"></a>
                        <h4>Information Architecture</h4>
                        <div class="c-imagebox">
                            <img data-sizes="(min-width: 48em) 66.6vw, 100vw"
                                data-src="/images/dev-center-ai-overview_small.png" data-srcset="/images/dev-center-ai-overview_small.png 400w,
                          /images/dev-center-ai-overview_medium.png 800w,
                          /images/dev-center-ai-overview_large.png 1200w" class="lazyload"
                                alt="Developer Center Information Architecture Overview">
                        </div>
                        <p class="c-imagebox__caption"><a href="#" data-reveal-id="dev-center-ai-overview">View Full Size</a>
                        </p>
                        <a name="user-flows"></a>
                        <h4>User Flows</h4>
                        <div class="row">
                            <div class="six columns">
                                <!-- half-width -->
                                <div class="c-imagebox">
                                    <img data-sizes="(min-width: 48em) 66.6vw, 100vw"
                                        data-src="/images/dc-v4-onboarding-userflow_small.png" data-srcset="/images/dc-v4-onboarding-userflow_small.png 400w,
                          /images/dc-v4-onboarding-userflow_medium.png 800w,
                          /images/dc-v4-onboarding-userflow_large.png 1200w" class="lazyload"
                                        alt="Developer Center New User Onboarding Flow">
                                </div>
                                <p class="c-imagebox__caption"><a href="#" data-reveal-id="dc-v4-onboarding-userflow">View Full
                                        Size</a></p>
                            </div>
                        </div>
                        <!-- end half-width -->
                        <a name="mockups"></a>
                        <h4>Mockups</h4>
                        <!-- <div class="row"><div class="six columns"> -->
                        <!-- half-width -->
                        <div class="c-imagebox">
                            <img data-sizes="(min-width: 48em) 66.6vw, 100vw"
                                data-src="/images/dc-v1-docs-landing-developer-mockup_small.png" data-srcset="/images/dc-v1-docs-landing-developer-mockup_small.png 400w,
                          /images/dc-v1-docs-landing-developer-mockup_medium.png 800w,
                          /images/dc-v1-docs-landing-developer-mockup_large.png 1200w" class="lazyload"
                                alt="Developer Center Early Mockups - 'Developer' Edition">
                        </div>
                        <p class="c-imagebox__caption">Early Mockups of Developer Center Documentation landing page -
                            'Developer' Edition <span class="hide-for-small">/ <a href="#"
                                    data-reveal-id="dc-v1-docs-landing-developer-mockup">View Larger</a></span></p>
                        <!-- </div><div class="six columns"> -->
                        <!-- half-width -->
                        <div class="c-imagebox">
                            <img data-sizes="(min-width: 48em) 66.6vw, 100vw"
                                data-src="/images/dc-v1-docs-landing-enterprise-mockup_small.png" data-srcset="/images/dc-v1-docs-landing-enterprise-mockup_small.png 400w,
                          /images/dc-v1-docs-landing-enterprise-mockup_medium.png 800w,
                          /images/dc-v1-docs-landing-enterprise-mockup_large.png 1200w" class="lazyload"
                                alt="Developer Center Early Mockups - 'Enterprise' Edition">
                        </div>
                        <p class="c-imagebox__caption">Early Mockups of Developer Center Documentation landing page -
                            'Enterprise' Edition <span class="hide-for-small">/ <a href="#"
                                    data-reveal-id="dc-v1-docs-landing-enterprise-mockup">View Larger</a></span></p>
                        <!-- </div></div> -->
                    </div>
                </li>
    </div>
