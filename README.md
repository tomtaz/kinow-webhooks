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
- **position updated**: product_position
- **product attached**: product_attached
- **director attached**: product_director
- **actor attached**: product_actor

Data row contains the linked product object (key "product").

For **product_attached** event, we also provide the linked product object (key "product_attached").

For **product_director** event, we also provide the linked director object (key "director").

For **product_actor** event, we also provide the linked actor object (key "actor").

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
- **history updated**: order_history

Data row contains the linked order object (key "order") and the linked customer object (key "customer").

For **order_history** event, we also provide the linked history object (key "history").

### Customer

- **create**: customer_created
- **update**: customer_updated
- **delete**: customer_deleted

Data row contains the linked customer object (key "customer").

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

### CMS
- **create**: cmspage_created
- **update**: cmspage_updated
- **delete**: cmspage_deleted

Data row contains the linked cms object (key "cmspage").

### CMS Category
- **create**: cmscategory_created
- **update**: cmscategory_updated
- **delete**: cmscategory_deleted

Data row contains the linked cms category object (key "cmscategory").

### Currency
- **update**: currency_updated
- **update all currencies**: currencies_updated

Data row contains the linked currency object only for currency_updated (key "currency").

### Language
- **update**: language_updated

Data row contains the linked currency object only for currency_updated (key "language").

### Group
- **attach customer**: group_customer_attached
- **remove customer**: group_customer_removed

Data row contains the linked customer object (key "customer") and the linked customer groups objects (key "groups").

### Extracts
 - **create**: extract_created
 - **update**: extract_updated
 - **delete**: extract_deleted
 
Data row contains the linked extract object (key "extract").
 
### Widget Top Menu
 - **create**: topmenu_created
 - **update**: topmenu_updated
 - **delete**: topmenu_deleted

Data row contains the linked top menu object (key "topmenu").

### Widget Footer Menu
 - **create**: footermenu_created
 - **update**: footermenu_updated
 - **delete**: footermenu_deleted
 
Data row contains the linked footer menu object (key "footermenu").
 
 ### Widget Slider
 - **create**: slider_created
 - **update**: slider_updated
 - **delete**: slider_deleted

Data row contains the linked slider object (key "slider").

 ### Stripe payment gateway
 - **pending payment (requires action - SCA)**: stripe_pending

Data row contains the linked Stripe Invoice object (key "invoice").
