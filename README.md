# Udemy - PhpUnit #

E-Learning makes during IT Watch.

## Configuration ##
Write in cmd to have phpunit command in project directory:
```
alias phpunit="./vendor/phpunit/phpunit/phpunit"
```

Write in cmd to launch tests:
```
phpunit Tests/ExampleTest.php
```

## Tips ##
Executes all tests from a specific directory:
```
phpunit tests/
```

Executes a specific test:
```
phpunit tests/ --fiter=testReturnsFullName
```

Executes tests with colors in command line:
```
phpunit tests/ --color
```

More information about phpunit.xml file, see this [link](https://phpunit.readthedocs.io/en/9.2/configuration.html).