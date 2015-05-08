Toblerone
===
Features
----
 * Multi language support
 * PSR valid tests
 * IDE Friendly as it doesn't cheat $this
 * No Magic
 * No base test that is required to be extended
 * Extension support
 * Coverage support?

Why?
----
I want to play with the idea of TDD but I would much prefer a test and code driven solution where as PHPSpec wants
to mask itself as a non-code non-test solution.

What does it look like?
----

```
<?php

namespace TobleroneTest\Acme;

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
        $this->instanceOf('Acme\Calculator');
    }
}
```
