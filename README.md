# SyliusCelebratePlugin

## Disclaimer

This plugin aims to provide a simple way to celebrate special events in your Sylius store.

It has been created for educational purposes and 
to illustrate how to provide stimulus controllers in a Sylius plugin, 
following PR I made on sylius ([Ease of use stimulus #17923](https://github.com/Sylius/Sylius/pull/17923))

It is not intended for production use.

## Installation

Open a command console, enter your project directory and execute:

```console
$ composer require barth/sylius-celebrate-plugin
$ yarn --force
$ yarn encore dev
```

That's it! No further configuration is required. 
Twig hooks are already registered thanks to Prepend Extension, 
and stimulus controllers are automatically registered thanks to Flex.

## Demo 

https://github.com/user-attachments/assets/f32a6c5c-b66b-4ac5-84aa-d8a48146b566
