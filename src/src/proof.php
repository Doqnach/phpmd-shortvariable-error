<?php

declare(strict_types=1);

namespace PHPMD\Proof;

use InvalidArgumentException;
use function var_dump;

final class Proof
{
    public function provide(): callable
    {
        return static function (): void {
            foreach ([] as $baz) {
                try {
                    print($baz);
                } catch (InvalidArgumentException $e) { // fail
                    var_dump($e);
                }
            }
        };
    }

    public function correct(): void
    {
        $a = 'fail'; // fail

        try {
            print($a);
        } catch (InvalidArgumentException $e) { // correct
            var_dump($e);
        }
    }
}
