# Misc

```php
$miscController = $client->getMiscController();
```

## Class Name

`MiscController`


# Initiate Payment

```php
function initiatePayment(string $accept, InitiatePaymentRequest $body): void
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `accept` | `string` | Header, Required | - |
| `body` | [`InitiatePaymentRequest`](../../doc/models/initiate-payment-request.md) | Body, Required | - |

## Response Type

`void`

## Example Usage

```php
$accept = 'application/json';
$body_amount = '100';
$body_currency = 'GBP';
$body_email = 'yourmail@example.com';
$body_firstName = 'John';
$body_lastName = 'Doe';
$body_callbackUrl = 'https://webhook.site/9d0b00ba-9a69-44fa-a43d-a82c33c36fdc';
$body_returnUrl = 'https://webhook.site';
$body_txRef = '45234ggv65rfdrhdbggsed';
$body_customization_title = 'Test Payment';
$body_customization_description = 'Payment Description';
$body_customization = new Models\Customization(
    $body_customization_title,
    $body_customization_description
);
$body_meta_uuid = 'uuid';
$body_meta_response = 'Response';
$body_meta = new Models\Meta(
    $body_meta_uuid,
    $body_meta_response
);
$body = new Models\InitiatePaymentRequest(
    $body_amount,
    $body_currency,
    $body_email,
    $body_firstName,
    $body_lastName,
    $body_callbackUrl,
    $body_returnUrl,
    $body_txRef,
    $body_customization,
    $body_meta
);

$miscController->initiatePayment($accept, $body);
```

