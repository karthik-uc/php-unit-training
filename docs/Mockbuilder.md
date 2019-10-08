# The PHPUnit Mockbuilder

## Generating mockbuilder object

```php
class FirstTest extends TestCase
{

    public function setUp(): void
    {
        $firstMock = $this->getMockBuilder("First");
    }
}
```

## Available methods

- `getMock`
- `getMockForAbstractClass`
- `getMockForTrait`
- `setMethods`
- `onlyMethods`
- `addMethods`
- `setMethodsExcept`
- `setConstructorArgs`
- `setMockClassName`
- `disableOriginalConstructor`
- `enableOriginalConstructor`
- `disableOriginalClone`
- `enableOriginalClone`
- `disableAutoload`
- `enableAutoload`
- `disableArgumentCloning`
- `enableArgumentCloning`
- `enableProxyingToOriginalMethods`
- `disableProxyingToOriginalMethods`
- `setProxyTarget`
- `allowMockingUnknownTypes`
- `disallowMockingUnknownTypes`
- `enableAutoReturnValueGeneration`
- `disableAutoReturnValueGeneration`