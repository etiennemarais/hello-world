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

### Lightning Talk Notes

# Outside in Testing

## What is outside in testing

A common problem when doing TDD in the context of a web app is what test to write first.

Outside in testing (Acceptance Test Driven Development) is the notion of starting to write your tests from the user/client flow perspective. Where you start of with the core business logic instead of getting hung up on authentication or filesystem mocking or some small subsystem.

Traditionally unit or feature tests have been made from the ground up implementation first and focussing on a small part instead of the bigger picture and application context.

This challenges the idea of getting caught up in implementation details and testing that but the service still fails on a user level, we see that too often in the wild. 

Between mobile and backend teams this becomes very apparent and no one team knows if their change would affect the other.

## Introducing API Blueprint

API Blueprint is an open specification powerful high-level API design language for web APIs. 

Its a markdown flavoured language agnostic tool to design and document APIs. 

This blueprint can be parsed into beautiful documentation accessable by anyone, json or yaml formats to use programatically somewhere else.


## Typical workflow would be

1. Start by talking through your api 
2. Use Apiary and API blueprint to document that design discussion
3. Generate the tests from the design
4. Implement the user flow spec that has been created


### Example use case

[Legit service](https://github.com/etiennemarais/legit)


#### Benefits

- Mobile and backend teams can work in parallel because of the "contract" setup between them
- API is documented well and versioned along with the code
- Stub calls can be made for staging servers
- Don't implement more than necessary
- Peace of mind and trust between teams
