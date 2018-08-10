@extends('layouts.landing') @section('content')

<main id="main-container" style="min-height: 916px;">
  <div class="bg-primary-dark">
    <div class="content content-top">
      <div class="row push">
        <div class="col-md py-10 d-md-flex align-items-md-center text-center">
          <h1 class="text-white mb-0">
            <span class="font-w300">Documentation</span>
            <span class="font-w400 font-size-lg text-white-op d-none d-md-inline-block">By Developers, for Developers..</span>
          </h1>
        </div>
        <div class="col-md py-10 d-md-flex align-items-md-center justify-content-md-end text-center">
          <a href="https://github.com/GitOdin-Official/gitodin-documentation" target="_BLANK"><button type="button" class="btn btn-alt-primary">
                    <i class="fa fa-user-plus mr-5"></i> See a Mistake? Make a PR.
                </button></a>
        </div>
      </div>
    </div>
  </div>
  <div class="bg-white">
    <div class="content">
      <h2 class="content-heading">Getting Started</h2>
      <div class="block">
        <div class="block-header block-header-default">
          <h3 class="block-title">
            <strong>1.</strong> What is GitOdin?
          </h3>
          <div class="block-options">
            <button type="button" class="btn-block-option">
                    <i class="si si-question"></i>
                </button>
          </div>
        </div>
        <div class="block-content block-content-full">
          <div id="faq1" role="tablist" aria-multiselectable="true">
            <div class="block block-bordered block-rounded mb-5">
              <div class="block-header" role="tab" id="faq1_h1">
                <a class="font-w600 text-body-color-dark" data-toggle="collapse" href="#what-is-gitodin" aria-expanded="true" aria-controls="what-is-gitodin">1.1 GitOdin Introduction</a>
              </div>
              <div id="what-is-gitodin" class="collapse show" role="tabpanel" aria-labelledby="faq1_h1" data-parent="#faq1">
                <div class="block-content border-t">
                  @include('pages.documentation.getting-started.what-is-git-odin')
                </div>
              </div>
            </div>
            <div class="block block-bordered block-rounded mb-5">
              <div class="block-header" role="tab" id="faq1_h2">
                <a class="font-w600 text-body-color-dark" data-toggle="collapse" href="#the-team" aria-expanded="true" aria-controls="the-team">1.2 The Team</a>
              </div>
              <div id="the-team" class="collapse" role="tabpanel" aria-labelledby="faq1_h2" data-parent="#faq1">
                <div class="block-content border-t">
                  @include('pages.documentation.getting-started.the-team')
                </div>
              </div>
            </div>
            <div class="block block-bordered block-rounded mb-5">
              <div class="block-header" role="tab" id="faq1_h3">
                <a class="font-w600 text-body-color-dark" data-toggle="collapse" href="#faq1_q3" aria-expanded="true" aria-controls="faq1_q3">1.3 GitOdins Cost Optimization</a>
              </div>
              <div id="faq1_q3" class="collapse" role="tabpanel" aria-labelledby="faq1_h3" data-parent="#faq1">
                <div class="block-content border-t">
                  @include('pages.documentation.getting-started.gitodins-cost-optimization')
                </div>
              </div>
            </div>
            <div class="block block-bordered block-rounded mb-5">
              <div class="block-header" role="tab" id="faq1_h4">
                <a class="font-w600 text-body-color-dark" data-toggle="collapse" href="#faq1_q4" aria-expanded="true" aria-controls="faq1_q4">1.4 What are our future plans?</a>
              </div>
              <div id="faq1_q4" class="collapse" role="tabpanel" aria-labelledby="faq1_h4" data-parent="#faq1">
                <div class="block-content border-t">
                  <p>
                    GitOdin is continuiously evolving the network, website, and business strategies.<br>We are working to save you money in the cost of developing, maintaining and scaling your socket servers.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="block">
        <div class="block-header block-header-default">
          <h3 class="block-title">
            <strong>2.</strong> Functionality
          </h3>
          <div class="block-options">
            <button type="button" class="btn-block-option">
                    <i class="si si-question"></i>
                </button>
          </div>
        </div>
        <div class="block-content block-content-full">
          <div id="faq2" role="tablist" aria-multiselectable="true">
            <div class="block block-bordered block-rounded mb-5">
              <div class="block-header" role="tab" id="faq2_h1">
                <a class="font-w600 text-body-color-dark" data-toggle="collapse" href="#why-socket-io" aria-expanded="true" aria-controls="why-socket-io">2.1 Why do we use Socket.io?</a>
              </div>
              <div id="why-socket-io" class="collapse show" role="tabpanel" aria-labelledby="faq2_h1" data-parent="#faq2">
                <div class="block-content border-t">
                  @include('pages.documentation.functionality.why-socket-io')
                </div>
              </div>
            </div>
            <div class="block block-bordered block-rounded mb-5">
              <div class="block-header" role="tab" id="faq2_h2">
                <a class="font-w600 text-body-color-dark" data-toggle="collapse" href="#faq2_q2" aria-expanded="true" aria-controls="faq2_q2">2.2 GitOdin Features</a>
              </div>
              <div id="faq2_q2" class="collapse" role="tabpanel" aria-labelledby="faq2_h2" data-parent="#faq2">
                <div class="block-content border-t">
                 @include('pages.documentation.functionality.features')
                </div>
              </div>
            </div>
            
            
          </div>
        </div>
      </div>
      <div class="block">
        <div class="block-header block-header-default">
          <h3 class="block-title">
            <strong>3.</strong> Payments
          </h3>
          <div class="block-options">
            <button type="button" class="btn-block-option">
                    <i class="si si-question"></i>
                </button>
          </div>
        </div>
        <div class="block-content block-content-full">
          <div id="faq3" role="tablist" aria-multiselectable="true">
            <div class="block block-bordered block-rounded mb-5">
              <div class="block-header" role="tab" id="faq3_h1">
                <a class="font-w600 text-body-color-dark" data-toggle="collapse" href="#faq3_q1" aria-expanded="true" aria-controls="faq3_q1">3.1 What are the available plans?</a>
              </div>
              <div id="faq3_q1" class="collapse" role="tabpanel" aria-labelledby="faq3_h1" data-parent="#faq3">
                <div class="block-content border-t">
                  @include('pages.documentation.billing.plans')
                </div>
              </div>
            </div>
            <div class="block block-bordered block-rounded mb-5">
              <div class="block-header" role="tab" id="faq3_h2">
                <a class="font-w600 text-body-color-dark" data-toggle="collapse" href="#faq3_q2" aria-expanded="true" aria-controls="faq3_q2">3.2 What are the available payment options?</a>
              </div>
              <div id="faq3_q2" class="collapse" role="tabpanel" aria-labelledby="faq3_h2" data-parent="#faq3">
                <div class="block-content border-t">
                  @include('pages.documentation.billing.accepted-payments')
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="content">
      <h2 class="content-heading">How it Works</h2>
      <div class="block">
        <div class="block-header block-header-default">
          <h3 class="block-title">
            <strong>4.</strong> Regional Towers and Bases.
          </h3>
          <div class="block-options">
            <button type="button" class="btn-block-option">
                    <i class="si si-question"></i>
                </button>
          </div>
        </div>
        <div class="block-content block-content-full">
          <div id="faq4" role="tablist" aria-multiselectable="true">
            <div class="block block-bordered block-rounded mb-5">
              <div class="block-header" role="tab" id="faq4_h1">
                <a class="font-w600 text-body-color-dark" data-toggle="collapse" href="#what-is-a-regional-tower" aria-expanded="true" aria-controls="what-is-a-regional-tower">4.1 What is a Regional Tower?</a>
              </div>
              <div id="what-is-a-regional-tower" class="collapse show" role="tabpanel" aria-labelledby="faq4_h1" data-parent="#faq4">
                <div class="block-content border-t">
                 @include('pages.documentation.regional-towers-and-bases.what-is-a-regional-tower')
                </div>
              </div>
            </div>
            <div class="block block-bordered block-rounded mb-5">
              <div class="block-header" role="tab" id="faq4_h2">
                <a class="font-w600 text-body-color-dark" data-toggle="collapse" href="#what-is-a-regional-base" aria-expanded="true" aria-controls="what-is-a-regional-base">4.2 What is a Regional Base?</a>
              </div>
              <div id="what-is-a-regional-base" class="collapse" role="tabpanel" aria-labelledby="faq4_h2" data-parent="#faq4">
                <div class="block-content border-t">
                 @include('pages.documentation.regional-towers-and-bases.what-is-a-regional-base')
                </div>
              </div>
            </div>
            <div class="block block-bordered block-rounded mb-5">
              <div class="block-header" role="tab" id="faq4_h2">
                <a class="font-w600 text-body-color-dark" data-toggle="collapse" href="#access-points" aria-expanded="true" aria-controls="access-points">4.3 Regional Access Points</a>
              </div>
              <div id="access-points" class="collapse" role="tabpanel" aria-labelledby="faq4_h2" data-parent="#faq4">
                <div class="block-content border-t">
                  @include('pages.documentation.regional-towers-and-bases.access-points')
                </div>
              </div>
            </div>
            <div class="block block-bordered block-rounded mb-5">
              <div class="block-header" role="tab" id="faq4_h2">
                <a class="font-w600 text-body-color-dark" data-toggle="collapse" href="#limitations" aria-expanded="true" aria-controls="limitations">4.4 Limitations</a>
              </div>
              <div id="limitations" class="collapse" role="tabpanel" aria-labelledby="faq4_h2" data-parent="#faq4">
                <div class="block-content border-t">
                   @include('pages.documentation.regional-towers-and-bases.limitations')
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="block">
        <div class="block-header block-header-default">
          <h3 class="block-title">
            <strong>5.</strong> Domains and Channels
          </h3>
          <div class="block-options">
            <button type="button" class="btn-block-option">
                    <i class="si si-question"></i>
                </button>
          </div>
        </div>
        <div class="block-content block-content-full">
          <div id="faq5" role="tablist" aria-multiselectable="true">
            <div class="block block-bordered block-rounded mb-5">
              <div class="block-header" role="tab" id="faq5_h1">
                <a class="font-w600 text-body-color-dark" data-toggle="collapse" href="#registering-domains" aria-expanded="true" aria-controls="registering-domains">5.1 What is a Domain?</a>
              </div>
              <div id="registering-domains" class="collapse show" role="tabpanel" aria-labelledby="faq5_h1" data-parent="#faq5">
                <div class="block-content border-t">
                  @include('pages.documentation.namespaces-channels.what-is-a-namespace')
                </div>
              </div>
            </div>
            <div class="block block-bordered block-rounded mb-5">
              <div class="block-header" role="tab" id="faq5_h2">
                <a class="font-w600 text-body-color-dark" data-toggle="collapse" href="#registering-domain" aria-expanded="true" aria-controls="registering-domain">5.2 Registering a Domain.</a>
              </div>
              <div id="registering-domain" class="collapse" role="tabpanel" aria-labelledby="faq5_h2" data-parent="#faq5">
                <div class="block-content border-t">
                  @include('pages.documentation.namespaces-channels.registering-domain')
                </div>
              </div>
            </div>
            <div class="block block-bordered block-rounded mb-5">
              <div class="block-header" role="tab" id="faq5_h2">
                <a class="font-w600 text-body-color-dark" data-toggle="collapse" href="#what-is-a-channel" aria-expanded="true" aria-controls="what-is-a-channel">5.3 What is a Channel?</a>
              </div>
              <div id="what-is-a-channel" class="collapse" role="tabpanel" aria-labelledby="faq5_h2" data-parent="#faq5">
                <div class="block-content border-t">
                  @include('pages.documentation.namespaces-channels.what-is-a-channel')
                </div>
              </div>
            </div>
            <div class="block block-bordered block-rounded mb-5">
              <div class="block-header" role="tab" id="faq5_h2">
                <a class="font-w600 text-body-color-dark" data-toggle="collapse" href="#how-to-join-channels" aria-expanded="true" aria-controls="how-to-join-channels">5.4 How to Join a Public Channels</a>
              </div>
              <div id="how-to-join-channels" class="collapse" role="tabpanel" aria-labelledby="faq5_h2" data-parent="#faq5">
                <div class="block-content border-t">
                  @include('pages.documentation.namespaces-channels.how-to-join-public-channels')
                </div>
              </div>
            </div>
            <div class="block block-bordered block-rounded mb-5">
              <div class="block-header" role="tab" id="faq5_h2">
                <a class="font-w600 text-body-color-dark" data-toggle="collapse" href="#how-to-join-auth-channels" aria-expanded="true" aria-controls="how-to-join-auth-channels">5.4 How to Join Auth Channels</a>
              </div>
              <div id="how-to-join-auth-channels" class="collapse" role="tabpanel" aria-labelledby="faq5_h2" data-parent="#faq5">
                <div class="block-content border-t">
                  @include('pages.documentation.namespaces-channels.how-to-join-auth-channels')
                </div>
              </div>
            </div>
            <div class="block block-bordered block-rounded mb-5">
              <div class="block-header" role="tab" id="faq5_h2">
                <a class="font-w600 text-body-color-dark" data-toggle="collapse" href="#channel-examples" aria-expanded="true" aria-controls="channel-examples">4.5 JS Client Examples</a>
              </div>
              <div id="channel-examples" class="collapse" role="tabpanel" aria-labelledby="faq5_h2" data-parent="#faq5">
                <div class="block-content border-t">
                  @include('pages.documentation.namespaces-channels.example')
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
    </div>
    
</main>
@endsection