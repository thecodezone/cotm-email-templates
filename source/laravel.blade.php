@extends('_layouts.lcs')

@section('logo')
    <tr>
        <td class="header">
            <a href="http://www.google.com/" style="display: inline-block;">
                <img src="https://laravel.com/img/notification-logo.png" class="logo" alt="Laravel Logo">
            </a>
        </td>
    </tr>
@endsection

@section('content')
    @component('email:components::section')
        <p>
            Lets see how much space this takes up!
        </p>
        <table class="action" align="center" width="100%" cellpadding="0" cellspacing="0">
            <tr>
                <td align="center">
                    <table width="100%" border="0" cellpadding="0" cellspacing="0">
                        <tr>
                            <td align="center">
                                <table border="0" cellpadding="0" cellspacing="0">
                                    <tr>
                                        <td>
                                            <a href="http://www.google.com/" class="mcnButton" target="_blank">Apply Now!</a>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
        <p>
            Lets see how much space this takes up!
        </p>
        <table class="panel" width="100%" cellpadding="0" cellspacing="0">
            <tr>
                <td class="panel-content">
                    <table width="100%" cellpadding="0" cellspacing="0">
                        <tr>
                            <td class="panel-item">
                                This will be some content that will go inside the panel. Let's see how much space it really takes up!
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
        <p>
            Lets see how much space this takes up!
        </p>
        <div class="table">
            {!! \Illuminate\Mail\Markdown::parse("| Laravel       | Table         | Example  |
                | ------------- |:-------------:| --------:|
                | Col 2 is      | Centered      | $10      |
                | Col 3 is      | Right-Aligned | $20      |") !!}
        </div>
        <table class="subcopy" width="100%" cellpadding="0" cellspacing="0" role="presentation">
            <tr>
                <td>
                    This is some subcopy! isn't it interesting!
                </td>
            </tr>
        </table>
    @endcomponent
@endsection

@section('legal')
    <tr>
        <td>
            <table class="footer" align="center" width="570" cellpadding="0" cellspacing="0">
                <tr>
                    <td class="content-cell" align="center">
                        This is some footer copy!
                    </td>
                </tr>
            </table>
        </td>
    </tr>
@endsection