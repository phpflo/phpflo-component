# Core components: Reusable flow

## Introduction

[![Build Status](https://travis-ci.org/phpflo/phpflo-core.svg?branch=master)](https://travis-ci.org/phpflo/phpflo-core)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/phpflo/phpflo-core/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/phpflo/phpflo-core/?branch=master)
[![Code Coverage](https://scrutinizer-ci.com/g/phpflo/phpflo-core/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/phpflo/phpflo-core/?branch=master)
[![License](http://img.shields.io/:license-mit-blue.svg)](http://doge.mit-license.org)

If you need reusable components for your next flow, this is the place to find them!
As you might have guessed, the focus lies on reusability and simplicity, just like the [flow-based programming](http://en.wikipedia.org/wiki/Flow-based_programming) paradigm suggests.
Contributions are welcome!

This project belongs to [phpflo](https://github.com/phpflo/phpflo).

## Installation

Since components are now decoupled from phpflo main repo for easier contribution and also separate usage, you now need to install via composer:

```shell
$ <your-project> composer require phpflo/phpflo-component
```
This also gives you the opportunity to leave out components as a dependency for phpflo projects where you don't want the class-overhead.

## Running the examples

File line count using _embedded_ PhpFlo:

```sh
$ ./examples/linecount/count.php somefile.txt
```

Using FBP definitions:
```sh
$ ./examples/linecount/countFromFbp.php somefile.txt
```

Using JSON definitions:
```sh
$ ./examples/linecount/countFromJson.php somefile.txt
```
