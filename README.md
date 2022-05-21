# PHP logger

Allows logging your php script execution

## Usage
```
$formatter = new StringFormatter();
$writer = new FileWriter($formatter);
$logger = new Logger($writer);

$logger -> debug('My message');
```