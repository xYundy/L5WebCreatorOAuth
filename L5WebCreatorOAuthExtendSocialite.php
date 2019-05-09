<?php

namespace xYundy\L5WebCreatorOAuth;

use SocialiteProviders\Manager\SocialiteWasCalled;

class L5WebCreatorOAuthExtendSocialite
{
    public function handle(SocialiteWasCalled $socialiteWasCalled)
    {
        $socialiteWasCalled->extendSocialite('l5webcreator', __NAMESPACE__.'\Provider');
    }
}
