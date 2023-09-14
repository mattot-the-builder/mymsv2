@component('mail::message')

# Invoice
@component('mail::subcopy')
Date : {{ $invoice['invoice_data']['date'] }} <br>
Invoice No: MYMS/IN/E/{{ $invoice["invoice_data"]['id'] }}
@endcomponent


## Bill To
{{ $invoice['invoice_data']['user_name'] }} <br>
{{ $invoice['invoice_data']['user_address'] }}

<x-mail::table>
| Description | Amount
| :------------- | -------------:|
| {{ $invoice['invoice_data']['course_name'] }} | {{ $invoice['invoice_data']['fee'] }} |
| Total    |  {{ $invoice['invoice_data']['fee'] }} |
</x-mail::table>

Thanks, <br>
MYMS
@endcomponent
