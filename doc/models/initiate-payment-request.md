
# Initiate Payment Request

## Structure

`InitiatePaymentRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `amount` | `string` | Required | - | getAmount(): string | setAmount(string amount): void |
| `currency` | `string` | Required | - | getCurrency(): string | setCurrency(string currency): void |
| `email` | `string` | Required | - | getEmail(): string | setEmail(string email): void |
| `firstName` | `string` | Required | - | getFirstName(): string | setFirstName(string firstName): void |
| `lastName` | `string` | Required | - | getLastName(): string | setLastName(string lastName): void |
| `callbackUrl` | `string` | Required | - | getCallbackUrl(): string | setCallbackUrl(string callbackUrl): void |
| `returnUrl` | `string` | Required | - | getReturnUrl(): string | setReturnUrl(string returnUrl): void |
| `txRef` | `string` | Required | - | getTxRef(): string | setTxRef(string txRef): void |
| `customization` | [`Customization`](../../doc/models/customization.md) | Required | - | getCustomization(): Customization | setCustomization(Customization customization): void |
| `meta` | [`Meta`](../../doc/models/meta.md) | Required | - | getMeta(): Meta | setMeta(Meta meta): void |

## Example (as JSON)

```json
{
  "amount": "100",
  "currency": "GBP",
  "email": "yourmail@example.com",
  "first_name": "John",
  "last_name": "Doe",
  "callback_url": "https://webhook.site/9d0b00ba-9a69-44fa-a43d-a82c33c36fdc",
  "return_url": "https://webhook.site",
  "tx_ref": "45234ggv65rfdrhdbggsed",
  "customization": {
    "title": "Test Payment",
    "description": "Payment Description"
  },
  "meta": {
    "uuid": "uuid",
    "response": "Response"
  }
}
```

