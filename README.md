# Kinow Webhooks

Implement webhook with Kinow Solution.

## Available languages

| Language  | Example  |
|---|---|
| PHP  |  [webhook.php](examples/webhook.php) |


## Requirements

- Your secret key

## Payload data

- **Event Id**: Uuid identifier
- **Subject**: The event title
- **Data**: Array of data

## Available events

### Product

- **create**: product_created
- **update**: product_updated
- **delete**: product_delete

Data row contains the linked product object (key "product").

### Access

- **update**: access_updated

Data row contains the linked access object (key "access") and linked customer object (key "customer").

### Subscription access

- **create**: subscription_created
- **renew**: subscription_renewed
- **stop**: subscription_stopped
- **renew failed**: subscription_error

Data row contains linked subscription object (key "subscription") and linked customer object (key "customer"). 

### Orders

- **create**: order_created

Data row contains linked order object (key "order") and linked customer object (key "customer").

### Users

- **create**: customer_created
- **update**: customer_updated
- **delete**: customer_deleted

Data row contains linked customer object (key "customer").
