COTM Email Templates
--------------------
Provides Blades and HTML versions of Church on the Move email templates, along with helpful blade components and includes for use in building emails.

## Usage

Register the the VCS repository in your `composer.json`.

```json
    {
        "repositories": {
          "email-templates": {
                "type": "vcs",
                "url": "git@bitbucket.org:cotmtulsa/email-templates.git"
            }
        }
    }
```

Now you can install the package with:

```bash
    composer require cotm/email-templates
```

Once you've included the package, you'll be able to use the following: 

### Templates

You can use email templates by rendering the template views directly:

```php
    view('email:templates::cotm', ['content' => $htmlContent]);
```

or by extending them:

```blade
    @extends('email:templates::cotm')
    
    @section('body')
        @component('email:components::section')
            <h1>Important</h1>
            <p>When extending, be sure to wrap your content in one or more sections.</p>
            <p>When calling the template directly instead of extending, your content will automatically be wrapped in a section if it isn't already.</p>
        @endcomponent
    @endsection
```
 
#### Available Templates
 
- `email:templates::cotm`
- `email:templates::lcs`

### Components

The following components can be used to compose the body of your email. 

- `email:components::section`

Use to visually separate email sections from each other. Section background colors are zebra-striped automatically. 

```blade
    @extends('email:templates::cotm')
    
    @section('body')
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

### Partials

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

