<?php

namespace App\Services;

class Newsletter {
    public function client() {
        $mailchimp = new \MailchimpMarketing\ApiClient();

        return $mailchimp->setConfig(
            [
                'apiKey' => config('services.mailchimp.key'),
                'server' => config('services.mailchimp.server'),
            ]
        );
    }

    public function subscribe($email) {
        return $this->client()->lists->addListMember(
            config('services.mailchimp.list'),
            [
                'email_address' => $email,
                'status'        => 'subscribed',
            ]
        );
    }
}
