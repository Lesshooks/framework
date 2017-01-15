# Lesshooks Framework for WordPress

## Installation & Usage
The framework calls the hook ```lesshooks``` when it's successfully loaded. So to make sure that Kjellberg Framework is installed and loaded before your code, you should **ALWAYS** wait for the ```lesshooks```-hook before calling any Kjellberg Framework classes.


**Example:**
```php
// Wait for framework too load.
add_action( 'lesshooks', 'my_plugin' );

function my_plugin() {
	// Create a post type for "Coupons".
	Posttype::create( 'Coupons', 'coupons' );
}
```


## Full documentation

A full documentation and more information about this framework can be found at [https://lesshooks.github.io/](https://lesshooks.github.io/)
