<?php
    namespace Bearlovescode\Mastodon\Services;

    use Bearlovescode\Mastodon\Clients\ApiClient;
    use Bearlovescode\Mastodon\Models\Configuration;
    use Bearlovescode\Mastodon\Models\Toot;

    class MastodonService
    {
        private ApiClient $client;

        public function __construct(private Configuration $config)
        {
            $this->configureClient();
        }

        public function publish (Toot $toot) : void
        {

        }

        private function configureClient() : void
        {
            if (empty($this->client))
            {
                $this->client = new ApiClient([
                    'base_uri' => (string) $this->config->instance
                ]);
            }

        }
    }