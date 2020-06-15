COTM Email Templates
--------------------
Provides Blades and HTML versions of Church on the Move email templates, along with helpful blade components and includes for use in building emails.

## Usage

Install the package with:

```bash
    composer config 'repo.email-templates' vcs git@bitbucket.org:cotmtulsa/email-templates-v2.git
    composer require cotm/email-templates
```

Once you've included the package, you'll be able to use the following: 

### Templates

You can use email templates by rendering the template views directly:

```php
    view('email:templates::cotm', ['content' => $htmlOrMarkdownContent]);
```

or by extending them:

```blade
    @extends('email:templates::cotm')
    
    @section('content')
        @component('email:components::section')
            <h1>Important</h1>
            <p>When extending, be sure to wrap your content in one or more sections.</p>
            <p>When calling the template directly instead of extending, your content will automatically be wrapped in a section if it isn't already.</p>
        @endcomponent
    @endsection
```

or by using them as a component:

```blade
    @component('email:templates::cotm')
        # This allows you to use Markdown.

        This is equivalent calling the view directly with a content variable. This is the same syntax used by Laravel Mailables.  
    @endcomponent
```
 
#### Available Templates
 
- `email:templates::cotm`: COTM branded template
- `email:templates::generic`: COTM unbranded template
- `email:templates::lcs`: LCS branded template
- `email:templates::lcs-endowment`: LCS Endowment branded template

#### Using outside of Laravel

HTML and twig files are provided for use outside of laravel. 

##### HTML

HTML templates contain `*|content|*` and `*|legal|*` merge tags. These tags can be replaced with your content. 

HTML file paths: 

- `/build_production/cotm/index.html`
- `/build_production/lcs/index.html`
- `/build_production/lcs-endowment/index.html`
- `/build_production/generic/index.html`

##### Twig

The templates below can be extended. Twig templates contain `content` and `legal` blocks.

Twig file paths: 

- `/build_production/twig/cotm/index.html`
- `/build_production/twig/lcs/index.html`
- `/build_production/twig/lcs-endowment/index.html`
- `/build_production/twig/generic/index.html`

##### Craft

Templates are also available as a Craft plugin. After installing the package as a composer dependency, install the plugin via the admin, or run the following:

```bash
 ./Craft install/plugin email-templates
```

Or add the following to a migration: 

```php
  Craft::$app->plugins->installPlugin('email-templates');
```

After the plugin is installed, the templates will be available under the `email:templates` namespace:

- `email:templates/cotm`
- `email:templates/lcs`
- `email:templates/lcs-endowment`
- `email:templates/generic`

### Components

The following components can be used to compose the body of your email. 

- `email:components::section`

Use to visually separate email sections from each other. Section background colors are zebra-striped automatically. 

```blade
    @extends('email:templates::cotm')
    
    @section('content')
        @component('email:components::section')
            <h2>Section 1</h2>
            <p>The section makes sure the content isn't nested against the edge of the container.</p>
        @endcomponent
        @component('email:components::section')
            <h2>Section 2</h2>
            <p>This section will be darker than the section above it.</p>
        @endcomponent
    @endsection
```

- `email:components::table`

A responsive data table component built specifically to work well with the template styles.

```blade
   @component('email:components::table')
        @slot('head')
            <th>Name</th><th>Description</th><th>Price</th>
       @endslot
       <tr>
           <td>Ticket 1</td><td>General Admission</td><td>$10.00</td>
       </tr>
       <tr>
           <td>Ticket 2</td><td>General Admission</td><td>$10.00</td>
       </tr>
        @slot('foot')
            <td colspan="3">Total:</td>
           <td>$20.00</td>
        @endslot
   @endcomponent
```

- `email:components::buttons`

A wrapper to center one or multiple buttons.

```blade
   @component('email:components::buttons')
        @include('email:partials::button', ['href' => 'http://www.google.com/', 'title' => 'Google')
        @include('email:partials::button', ['href' => 'http://www.yahoo.com/', 'title' => 'Yahoo')
   @endcomponent
```

- `email:components::button`

You can also use a button component instead of a partial.

```blade
   @component('email:components::buttons')
        @component('email:partials::button', ['href' => 'http://www.google.com/', 'title' => 'Google')
            <strong>
                Google
            </strong>
        @endcomponent
   @endcomponent
```

#### Laravel components

The following [laravel mailable components](https://laravel.com/docs/5.8/mail#markdown-mailables) are supported and fit visually in all templates.  

- Button Component (`mail::button`)
- Panel Component (`mail::panel`)
- Table Component (`mail::table`)

### Partials

- `email:partials::button`

See above for implementation.

- `email:partials::content`

A helper to to wrap HTML content in a section component if it isn't already.

```blade
    @include("email:partials::content", ['content' => $htmlContent])
```

- `email:partials::table`

Compose the table component with an array.

```blade
    @include("email:partials::content", 
        [
            'headings' => [
                'Name', 
                'Description', 
                'Price'
            ],
            'rows' => [
                [
                    'Ticket 1',
                    'General Admission'
                    'Price'
                ],
                [
                    'Ticket 2',
                    'General Admission'
                    'Price'
                ]
            ],
            'footers' => [
                'Total',
                '',
                '',
                '$20.00'
            ]
    )
```

## Development

This package uses [Jigsaw](https://jigsaw.tighten.co/). Run the following commands to build the HTML files locally: 

```bash
./vendor/bin/jigsaw build
```
or
```bash
yarn watch
``` 

After changes to the templates or styles are made, you should rebuild and the HTML files and commit the changes.

```bash
yarn prod
```

