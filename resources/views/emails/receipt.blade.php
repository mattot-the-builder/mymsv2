@component('mail::message')

# Receipt
@component('mail::subcopy')
Date : {{ $invoice['invoice_data']['date'] }} <br>
Invoice No: MYMS/IN/R/{{ $invoice["invoice_data"]['id'] }}
@endcomponent


## Bill To
{{ $invoice['invoice_data']['user_name'] }}

<x-mail::table>
| Description | Amount
| :------------- | -------------:|
| {{ $invoice['invoice_data']['course_name'] }} | {{ $invoice['invoice_data']['fee'] }} |
| Total    |  {{ $invoice['invoice_data']['fee'] }} |
| Payment Method    |  {{ $invoice['invoice_data']['payment_method'] }} |
</x-mail::table>

@component('mail::subcopy')
Payment received successfully.
@endcomponent

Thanks, <br>
{{ env('APP_NAME') }}
@endcomponent
