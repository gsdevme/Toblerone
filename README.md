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
use Toblerone\Assertion\PHPUnit\Assert;
use Toblerone\Test\ConstructInterface;
use Toblerone\Test\InstanceInterface;
use Toblerone\Test\TestInterface;

class Calculator implements TestInterface, InstanceInterface, ConstructInterface
{
    use Assert;

    const CLASS_NAME = 'Acme\Calculator';

    /** @var Acme\Calculator */
    public $instance;

    /**
     * @it should be an instance of Acme\Calculator
     */
    public function itShouldBeAnInstanceOf()
    {
        $this->assertInstanceOf(self::CLASS_NAME, $this->instance);
    }
```
