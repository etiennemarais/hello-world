# Outside in Testing Repo Test

This is a small example of how you would use and generate acceptance tests
via your `apiary.apib` specification in a Laravel app.

## Docs on Apiary

[http://docs.helloworld245.apiary.io/](http://docs.helloworld245.apiary.io/v)

For a fuller reference go to [http://docs.legit.apiary.io/](http://docs.legit.apiary.io/)


## Usage

To generate acceptance tests are easy. Run in your project root

```
php artisan outline:regenerate
```

The tests will get generated from your api blueprint file so changes to it
should come from the apiary.io tool and then pushed back to your project.

Hit the [save and commit](http://i.imgur.com/822Y0sB.png) button.

Look for the `FeaturesTest` class under your `/tests/Features` folder.
