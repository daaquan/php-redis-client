<?php
/**
 * This file is part of RedisClient.
 * git: https://github.com/cheprasov/php-redis-client
 *
 * (C) Alexander Cheprasov <cheprasov.84@ya.ru>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace RedisClient\Client\Version;

use RedisClient\Client\AbstractRedisClient;
use RedisClient\Command\Traits\Version2x6\CommandsTrait;
use RedisClient\Pipeline\PipelineInterface;
use RedisClient\Pipeline\Version\Pipeline2x6;

class RedisClient2x6 extends AbstractRedisClient {
    use CommandsTrait;

    /**
     * @param \Closure|null $Pipeline
     * @return PipelineInterface
     */
    protected function createPipeline(\Closure $Pipeline = null) {
        return new Pipeline2x6($Pipeline);
    }

}
