# Statamic: explode modifier
If you're familiar with php's
[explode](http://php.net/manual/en/function.explode.php) function, then
you know what this does. If you aren't and need to explode a string
variable with a string and get back a certain piece, then you've come to
the right place.

## Installation
Download the repo and drop the explode directory into \_add-ons. That's
it!

## Use
To call the modifier, tell it what character to explode on and the index of
the piece you'd like.

So let's say you have a drop named `example` that has the value of
`charlie/chaplin/movies`.

Use this in your template:

```
{{ example|explode:/:1 }}
```

And `chaplin` will be output.

**NOTE:** If you need to explode on a `:` character, use `col` instead.

## Feedback & Contribute
Feedback? Ideas? Need support? Open an
[issue](https://github.com/thisbythem/Statamic-explode/issues) or feel
free to
fork and pull request your heart out. Happy hacking!


