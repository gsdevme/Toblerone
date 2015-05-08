Toblerone
===
A TDD Framework wrapping existing and well documented PHPUnit methods.

Features
----
 * Process isolation
 * IDE Friendly as it doesn't cheat $this
 * Keep existing knowledge of assertion libraries methods (PHPUnit)
 * Extension support
 * Coverage support?
 * Multi language support
 * PSR valid tests
 * No Magic
 * No base test that is required to be extended

What does it look like?
----

```
<?php

namespace tests\Toblerone\Acme;

class Calculator implements Toblerone\Test
{
    use Toblerone\Extension\PHPUnit\Assert;

    /** @var Acme\Calculator */
    protected $calculator;

    /**
     * @it should be an instance of Acme\Calculator
     */
    public function itShouldBeAnInstanceOf()
    {
        $this->assertInstanceOf('Acme\Calculator');
    }
}
```
