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
- **delete**: product_deleted

Data row contains the linked product object (key "product").

### Access

- **update**: access_created
- **update**: access_updated
- **delete**: access_deleted

Data row contains the linked access object (key "access"), the linked product object (key "product") and the linked customer object (key "customer").

### Subscription access

- **create**: subscription_created
- **renew**: subscription_renewed
- **stop**: subscription_stopped
- **renew failed**: subscription_error

Data row contains the linked subscription object (key "subscription") and the linked customer object (key "customer").

For **subscription_error** event, we also provide a key "payment_method" with the payment name.

For **subscription_stopped** event, we also provide the linked access object (key "access").

### Order

- **create**: order_created

Data row contains the linked order object (key "order") and the linked customer object (key "customer").

### Customer

- **create**: customer_created
- **update**: customer_updated
- **delete**: customer_deleted

### Category

- **create**: category_created
- **update**: category_updated
- **delete**: category_deleted

Data row contains the linked category object (key "category").

### Actor

- **create**: actor_created
- **update**: actor_updated
- **delete**: actor_deleted

Data row contains the linked supplier object (key "supplier").


### Director

- **create**: director_created
- **update**: director_updated
- **delete**: director_deleted

Data row contains the linked director object (key "director").

### Video

- **create**: video_created
- **update**: video_updated
- **delete**: video_deleted

Data row contains the linked video object (key "video").