<?php
/**
 *
 * Created by PhpStorm.
 * User: George Markose
 */

namespace George\Csp\Setup;

use George\Csp\Model\CspModelFactory;
use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;

class InstallData implements InstallDataInterface
{
    /**
     * @var CspModelFactory
     */
    protected $cspModelFactory;

    public function __construct(CspModelFactory $cspModelFactory)
    {
        $this->cspModelFactory  =   $cspModelFactory;
    }

    public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        $data   =   [
            [
            'policy_id' =>  "connect-src",
            'value_id'  =>  "star_sessioncam_com",
            'value_type'    =>  "*.sessioncam.com"
            ],
            [
                'policy_id' =>  "connect-src",
                'value_id'  =>  "sessioncam_com",
                'value_type'    =>  "sessioncam.com"
            ],
            [
                'policy_id' =>  "connect-src",
                'value_id'  =>  "smartystreets_com",
                'value_type'    =>  "smartystreets.com"
            ],
            [
                'policy_id' =>  "connect-src",
                'value_id'  =>  "star_smartystreets_com",
                'value_type'    =>  "*.smartystreets.com"
            ],
            [
                'policy_id' =>  "connect-src",
                'value_id'  =>  "star_googleapis_com",
                'value_type'    =>  "*.googleapis.com"
            ],
            [
                'policy_id' =>  "connect-src",
                'value_id'  =>  "star_riskified_com",
                'value_type'    =>  "*.riskified.com"
            ],
            [
                'policy_id' =>  "connect-src",
                'value_id'  =>  "star_google_com",
                'value_type'    =>  "*.google.com"
            ],
            [
                'policy_id' =>  "connect-src",
                'value_id'  =>  "star_braintree_api_com",
                'value_type'    =>  "*.braintree-api.com"
            ],
            [
                'policy_id' =>  "connect-src",
                'value_id'  =>  "star_braintreegateway_com",
                'value_type'    =>  "*.braintreegateway.com"
            ],
            [
                'policy_id' =>  "connect-src",
                'value_id'  =>  "star_paypal_com",
                'value_type'    =>  "*.paypal.com"
            ],
            [
                'policy_id' =>  "connect-src",
                'value_id'  =>  "star_linkedin_com",
                'value_type'    =>  "*.linkedin.com"
            ],
            [
                'policy_id' =>  "connect-src",
                'value_id'  =>  "star_google_analytics_com",
                'value_type'    =>  "*.google-analytics.com"
            ],
            [
                'policy_id' =>  "connect-src",
                'value_id'  =>  "star_doubleclick_net",
                'value_type'    =>  "*.doubleclick.net"
            ],
            [
                'policy_id' =>  "connect-src",
                'value_id'  =>  "star_googletagmanager_com",
                'value_type'    =>  "*.googletagmanager.com"
            ],
            [
                'policy_id' =>  "connect-src",
                'value_id'  =>  "star_youtube_com",
                'value_type'    =>  "*.youtube.com"
            ],
            [
                'policy_id' =>  "connect-src",
                'value_id'  =>  "star_energystar_gov",
                'value_type'    =>  "*.energystar.gov"
            ],
            [
                'policy_id' =>  "connect-src",
                'value_id'  =>  "star_google_co_in",
                'value_type'    =>  "*.google.co.in"
            ],
            [
                'policy_id' =>  "connect-src",
                'value_id'  =>  "star_amazonaws_com",
                'value_type'    =>  "*.amazonaws.com"
            ],
            [
                'policy_id' =>  "connect-src",
                'value_id'  =>  "star_alocdn_com",
                'value_type'    =>  "*.alocdn.com"
            ],
            [
                'policy_id' =>  "connect-src",
                'value_id'  =>  "star_facebook_net",
                'value_type'    =>  "*.facebook.net"
            ],
            [
                'policy_id' =>  "connect-src",
                'value_id'  =>  "star_facebook_com",
                'value_type'    =>  "*.facebook.com"
            ],
            [
                'policy_id' =>  "script-src",
                'value_id'  =>  "livechatinc_com",
                'value_type'    =>  "livechatinc.com"
            ],
            [
                'policy_id' =>  "script-src",
                'value_id'  =>  "star_livechatinc_com",
                'value_type'    =>  "*.livechatinc.com"
            ],
            [
                'policy_id' =>  "script-src",
                'value_id'  =>  "riskified_com",
                'value_type'    =>  "riskified.com"
            ],
            [
                'policy_id' =>  "script-src",
                'value_id'  =>  "star_riskified_com",
                'value_type'    =>  "*.riskified.com"
            ],
            [
                'policy_id' =>  "script-src",
                'value_id'  =>  "star_googletagmanager_com",
                'value_type'    =>  "*.googletagmanager.com"
            ],
            [
                'policy_id' =>  "script-src",
                'value_id'  =>  "googletagmanager_com",
                'value_type'    =>  "googletagmanager.com"
            ],
            [
                'policy_id' =>  "script-src",
                'value_id'  =>  "cloudfront_net",
                'value_type'    =>  "cloudfront.net"
            ],
            [
                'policy_id' =>  "script-src",
                'value_id'  =>  "star_cloudfront_net",
                'value_type'    =>  "*.cloudfront.net"
            ],
            [
                'policy_id' =>  "script-src",
                'value_id'  =>  "star_googleapis_com",
                'value_type'    =>  "*.googleapis.com"
            ],
            [
                'policy_id' =>  "script-src",
                'value_id'  =>  "star_adobedtm_com",
                'value_type'    =>  "*.adobedtm.com"
            ],
            [
                'policy_id' =>  "script-src",
                'value_id'  =>  "star_google_com",
                'value_type'    =>  "*.google.com"
            ],
            [
                'policy_id' =>  "script-src",
                'value_id'  =>  "star_gstatic_com",
                'value_type'    =>  "*.gstatic.com"
            ],
            [
                'policy_id' =>  "script-src",
                'value_id'  =>  "star_licdn_com",
                'value_type'    =>  "*.licdn.com"
            ],
            [
                'policy_id' =>  "script-src",
                'value_id'  =>  "star_braintree_api_com",
                'value_type'    =>  "*.braintree-api.com"
            ],
            [
                'policy_id' =>  "script-src",
                'value_id'  =>  "star_braintreegateway_com",
                'value_type'    =>  "*.braintreegateway.com"
            ],
            [
                'policy_id' =>  "script-src",
                'value_id'  =>  "star_paypal_com",
                'value_type'    =>  "*.paypal.com"
            ],
            [
                'policy_id' =>  "script-src",
                'value_id'  =>  "star_linkedin_com",
                'value_type'    =>  "*.linkedin.com"
            ],
            [
                'policy_id' =>  "script-src",
                'value_id'  =>  "star_google_analytics_com",
                'value_type'    =>  "*.google-analytics.com"
            ],
            [
                'policy_id' =>  "script-src",
                'value_id'  =>  "star_doubleclick_net",
                'value_type'    =>  "*.doubleclick.net"
            ],
            [
                'policy_id' =>  "script-src",
                'value_id'  =>  "star_googletagmanager_com",
                'value_type'    =>  "*.googletagmanager.com"
            ],
            [
                'policy_id' =>  "script-src",
                'value_id'  =>  "star_youtube_com",
                'value_type'    =>  "*.youtube.com"
            ],
            [
                'policy_id' =>  "script-src",
                'value_id'  =>  "star_energystar_gov",
                'value_type'    =>  "*.energystar.gov"
            ],
            [
                'policy_id' =>  "script-src",
                'value_id'  =>  "star_google_co_in",
                'value_type'    =>  "*.google.co.in"
            ],
            [
                'policy_id' =>  "script-src",
                'value_id'  =>  "star_amazonaws_com",
                'value_type'    =>  "*.amazonaws.com"
            ],
            [
                'policy_id' =>  "script-src",
                'value_id'  =>  "star_alocdn_com",
                'value_type'    =>  "*.alocdn.com"
            ],
            [
                'policy_id' =>  "script-src",
                'value_id'  =>  "star_facebook_net",
                'value_type'    =>  "*.facebook.net"
            ],
            [
                'policy_id' =>  "script-src",
                'value_id'  =>  "star_facebook_com",
                'value_type'    =>  "*.facebook.com"
            ],
            [
                'policy_id' =>  "frame-src",
                'value_id'  =>  "nest_com",
                'value_type'    =>  "nest.com"
            ],
            [
                'policy_id' =>  "frame-src",
                'value_id'  =>  "star_nest_com",
                'value_type'    =>  "*.nest.com"
            ],
            [
                'policy_id' =>  "frame-src",
                'value_id'  =>  "star_google_com",
                'value_type'    =>  "*.google.com"
            ],
            [
                'policy_id' =>  "frame-src",
                'value_id'  =>  "store_google_com",
                'value_type'    =>  "store.google.com"
            ],
            [
                'policy_id' =>  "frame-src",
                'value_id'  =>  "livechatinc_com",
                'value_type'    =>  "livechatinc.com"
            ],
            [
                'policy_id' =>  "frame-src",
                'value_id'  =>  "star_livechatinc_com",
                'value_type'    =>  "*.livechatinc.com"
            ],
            [
                'policy_id' =>  "frame-src",
                'value_id'  =>  "star_gstatic_com",
                'value_type'    =>  "*.gstatic.com"
            ],
            [
                'policy_id' =>  "frame-src",
                'value_id'  =>  "star_braintree_api_com",
                'value_type'    =>  "*.braintree-api.com"
            ],
            [
                'policy_id' =>  "frame-src",
                'value_id'  =>  "star_braintreegateway_com",
                'value_type'    =>  "*.braintreegateway.com"
            ],
            [
                'policy_id' =>  "frame-src",
                'value_id'  =>  "star_paypal_com",
                'value_type'    =>  "*.paypal.com"
            ],
            [
                'policy_id' =>  "frame-src",
                'value_id'  =>  "star_linkedin_com",
                'value_type'    =>  "*.linkedin.com"
            ],
            [
                'policy_id' =>  "frame-src",
                'value_id'  =>  "star_google_analytics_com",
                'value_type'    =>  "*.google-analytics.com"
            ],
            [
                'policy_id' =>  "frame-src",
                'value_id'  =>  "star_doubleclick_net",
                'value_type'    =>  "*.doubleclick.net"
            ],
            [
                'policy_id' =>  "frame-src",
                'value_id'  =>  "star_googletagmanager_com",
                'value_type'    =>  "*.googletagmanager.com"
            ],
            [
                'policy_id' =>  "frame-src",
                'value_id'  =>  "star_youtube_com",
                'value_type'    =>  "*.youtube.com"
            ],
            [
                'policy_id' =>  "frame-src",
                'value_id'  =>  "star_energystar_gov",
                'value_type'    =>  "*.energystar.gov"
            ],
            [
                'policy_id' =>  "frame-src",
                'value_id'  =>  "star_google_co_in",
                'value_type'    =>  "*.google.co.in"
            ],
            [
                'policy_id' =>  "frame-src",
                'value_id'  =>  "star_amazonaws_com",
                'value_type'    =>  "*.amazonaws.com"
            ],
            [
                'policy_id' =>  "frame-src",
                'value_id'  =>  "star_alocdn_com",
                'value_type'    =>  "*.alocdn.com"
            ],
            [
                'policy_id' =>  "frame-src",
                'value_id'  =>  "star_facebook_net",
                'value_type'    =>  "*.facebook.net"
            ],
            [
                'policy_id' =>  "frame-src",
                'value_id'  =>  "star_facebook_com",
                'value_type'    =>  "*.facebook.com"
            ],
            [
                'policy_id' =>  "img-src",
                'value_id'  =>  "doubleclick_net",
                'value_type'    =>  "doubleclick.net"
            ],
            [
                'policy_id' =>  "img-src",
                'value_id'  =>  "star_doubleclick_net",
                'value_type'    =>  "*.doubleclick.net"
            ],
            [
                'policy_id' =>  "img-src",
                'value_id'  =>  "star_google_com",
                'value_type'    =>  "*.google.com"
            ],
            [
                'policy_id' =>  "img-src",
                'value_id'  =>  "google_com",
                'value_type'    =>  "google.com"
            ],
            [
                'policy_id' =>  "img-src",
                'value_id'  =>  "riskafied",
                'value_type'    =>  "*.riskified.com"
            ],
            [
                'policy_id' =>  "img-src",
                'value_id'  =>  "star_gstatic_com",
                'value_type'    =>  "*.gstatic.com"
            ],
            [
                'policy_id' =>  "img-src",
                'value_id'  =>  "star_braintree_api_com",
                'value_type'    =>  "*.braintree-api.com"
            ],
            [
                'policy_id' =>  "img-src",
                'value_id'  =>  "star_braintreegateway_com",
                'value_type'    =>  "*.braintreegateway.com"
            ],
            [
                'policy_id' =>  "img-src",
                'value_id'  =>  "star_paypal_com",
                'value_type'    =>  "*.paypal.com"
            ],
            [
                'policy_id' =>  "img-src",
                'value_id'  =>  "star_linkedin_com",
                'value_type'    =>  "*.linkedin.com"
            ],
            [
                'policy_id' =>  "img-src",
                'value_id'  =>  "star_google_analytics_com",
                'value_type'    =>  "*.google-analytics.com"
            ],
            [
                'policy_id' =>  "img-src",
                'value_id'  =>  "star_googletagmanager_com",
                'value_type'    =>  "*.googletagmanager.com"
            ],
            [
                'policy_id' =>  "img-src",
                'value_id'  =>  "star_youtube_com",
                'value_type'    =>  "*.youtube.com"
            ],
            [
                'policy_id' =>  "img-src",
                'value_id'  =>  "star_energystar_gov",
                'value_type'    =>  "*.energystar.gov"
            ],
            [
                'policy_id' =>  "img-src",
                'value_id'  =>  "star_google_co_in",
                'value_type'    =>  "*.google.co.in"
            ],
            [
                'policy_id' =>  "img-src",
                'value_id'  =>  "star_amazonaws_com",
                'value_type'    =>  "*.amazonaws.com"
            ],
            [
                'policy_id' =>  "img-src",
                'value_id'  =>  "star_alocdn_com",
                'value_type'    =>  "*.alocdn.com"
            ],
            [
                'policy_id' =>  "img-src",
                'value_id'  =>  "star_facebook_net",
                'value_type'    =>  "*.facebook.net"
            ],
            [
                'policy_id' =>  "img-src",
                'value_id'  =>  "star_facebook_com",
                'value_type'    =>  "*.facebook.com"
            ],
            [
                'policy_id' =>  "media-src",
                'value_id'  =>  "livechatinc_com",
                'value_type'    =>  "livechatinc.com"
            ],
            [
                'policy_id' =>  "media-src",
                'value_id'  =>  "star_livechatinc_com",
                'value_type'    =>  "*.livechatinc.com"
            ],
            [
                'policy_id' =>  "media-src",
                'value_id'  =>  "star_google_com",
                'value_type'    =>  "*.google.com"
            ],
            [
                'policy_id' =>  "media-src",
                'value_id'  =>  "star_gstatic_com",
                'value_type'    =>  "*.gstatic.com"
            ],
            [
                'policy_id' =>  "media-src",
                'value_id'  =>  "star_braintree_api_com",
                'value_type'    =>  "*.braintree-api.com"
            ],
            [
                'policy_id' =>  "media-src",
                'value_id'  =>  "star_braintreegateway_com",
                'value_type'    =>  "*.braintreegateway.com"
            ],
            [
                'policy_id' =>  "media-src",
                'value_id'  =>  "star_paypal_com",
                'value_type'    =>  "*.paypal.com"
            ],
            [
                'policy_id' =>  "media-src",
                'value_id'  =>  "star_linkedin_com",
                'value_type'    =>  "*.linkedin.com"
            ],
            [
                'policy_id' =>  "media-src",
                'value_id'  =>  "star_google_analytics_com",
                'value_type'    =>  "*.google-analytics.com"
            ],
            [
                'policy_id' =>  "media-src",
                'value_id'  =>  "star_doubleclick_net",
                'value_type'    =>  "*.doubleclick.net"
            ],
            [
                'policy_id' =>  "media-src",
                'value_id'  =>  "star_googletagmanager_com",
                'value_type'    =>  "*.googletagmanager.com"
            ],
            [
                'policy_id' =>  "media-src",
                'value_id'  =>  "star_youtube_com",
                'value_type'    =>  "*.youtube.com"
            ],
            [
                'policy_id' =>  "media-src",
                'value_id'  =>  "star_energystar_gov",
                'value_type'    =>  "*.energystar.gov"
            ],
            [
                'policy_id' =>  "media-src",
                'value_id'  =>  "star_google_co_in",
                'value_type'    =>  "*.google.co.in"
            ],
            [
                'policy_id' =>  "media-src",
                'value_id'  =>  "star_amazonaws_com",
                'value_type'    =>  "*.amazonaws.com"
            ],
            [
                'policy_id' =>  "media-src",
                'value_id'  =>  "star_alocdn_com",
                'value_type'    =>  "*.alocdn.com"
            ],
            [
                'policy_id' =>  "media-src",
                'value_id'  =>  "star_facebook_net",
                'value_type'    =>  "*.facebook.net"
            ],
            [
                'policy_id' =>  "media-src",
                'value_id'  =>  "star_facebook_com",
                'value_type'    =>  "*.facebook.com"
            ],
            [
                'policy_id' =>  "style-src",
                'value_id'  =>  "star_googleapis_com",
                'value_type'    =>  "*.googleapis.com"
            ],
            [
                'policy_id' =>  "style-src",
                'value_id'  =>  "googleapis_com",
                'value_type'    =>  "googleapis.com"
            ],
            [
                'policy_id' =>  "style-src",
                'value_id'  =>  "ajax_googleapis_com",
                'value_type'    =>  "ajax.googleapis.com"
            ],
            [
                'policy_id' =>  "style-src",
                'value_id'  =>  "star_google_com",
                'value_type'    =>  "*.google.com"
            ],
            [
                'policy_id' =>  "style-src",
                'value_id'  =>  "star_gstatic_com",
                'value_type'    =>  "*.gstatic.com"
            ],
            [
                'policy_id' =>  "style-src",
                'value_id'  =>  "star_braintree_api_com",
                'value_type'    =>  "*.braintree-api.com"
            ],
            [
                'policy_id' =>  "style-src",
                'value_id'  =>  "star_braintreegateway_com",
                'value_type'    =>  "*.braintreegateway.com"
            ],
            [
                'policy_id' =>  "style-src",
                'value_id'  =>  "star_paypal_com",
                'value_type'    =>  "*.paypal.com"
            ],
            [
                'policy_id' =>  "style-src",
                'value_id'  =>  "star_linkedin_com",
                'value_type'    =>  "*.linkedin.com"
            ],
            [
                'policy_id' =>  "style-src",
                'value_id'  =>  "star_google_analytics_com",
                'value_type'    =>  "*.google-analytics.com"
            ],
            [
                'policy_id' =>  "style-src",
                'value_id'  =>  "star_doubleclick_net",
                'value_type'    =>  "*.doubleclick.net"
            ],
            [
                'policy_id' =>  "style-src",
                'value_id'  =>  "star_googletagmanager_com",
                'value_type'    =>  "*.googletagmanager.com"
            ],
            [
                'policy_id' =>  "style-src",
                'value_id'  =>  "star_youtube_com",
                'value_type'    =>  "*.youtube.com"
            ],
            [
                'policy_id' =>  "style-src",
                'value_id'  =>  "star_energystar_gov",
                'value_type'    =>  "*.energystar.gov"
            ],
            [
                'policy_id' =>  "style-src",
                'value_id'  =>  "star_google_co_in",
                'value_type'    =>  "*.google.co.in"
            ],
            [
                'policy_id' =>  "style-src",
                'value_id'  =>  "star_amazonaws_com",
                'value_type'    =>  "*.amazonaws.com"
            ],
            [
                'policy_id' =>  "style-src",
                'value_id'  =>  "star_alocdn_com",
                'value_type'    =>  "*.alocdn.com"
            ],
            [
                'policy_id' =>  "style-src",
                'value_id'  =>  "star_facebook_net",
                'value_type'    =>  "*.facebook.net"
            ],
            [
                'policy_id' =>  "style-src",
                'value_id'  =>  "star_facebook_com",
                'value_type'    =>  "*.facebook.com"
            ],
            [
                'policy_id' =>  "font-src",
                'value_id'  =>  "star_gstatic_com",
                'value_type'    =>  "*.gstatic.com"
            ],
            [
                'policy_id' =>  "font-src",
                'value_id'  =>  "star_google_com",
                'value_type'    =>  "*.google.com"
            ]
        ];

        foreach ($data as $item) {
            $post = $this->cspModelFactory->create();
            $post->addData($item)->save();
        }
    }
}
