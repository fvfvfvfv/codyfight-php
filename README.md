## A PHP Client for interacting with the Codyfight API

---
### Installation
```
composer install fvfvfvfv/codyfight-php
```


### Usage
Before being able to interact with the Codyfight API, you need to [generate a CKey](https://codyfight.com/play/)

#### Creating a Codyfight instance
```php
$codyfight = new \Fvfvfvfv\CodyfightClient\Codyfight($cKey);
```

#### Starting a game
```php
$game = $codyfight->init(\Fvfvfvfv\CodyfightClient\Enums\GameMode::FRIENDLY, 'foo')
```
Every interaction with the Codyfight API returns a ``Game`` class instance
This instance contains all data returned from the API. 

_In the future this client will be extended to cast returned data into their relevant classes_

#### Available methods
```php
$codyfight->init(\Fvfvfvfv\CodyfightClient\Enums\GameMode::FRIENDLY, 'foo'); // Initializes a new game
$codyfight->check(); // Returns a Game instance without performing any action
$codyfight->cast($skillId, $x, $y); // Cast a skill onto the specified tile
$dodyfight->move($x, $y); // Moves the player to the specified tile
$codyFight->surrender(); // Surrenders the game
```
