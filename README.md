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

### Access

- **update**: access_created
- **update**: access_updated
- **delete**: access_deleted

Data row contains the linked Access object (key "access"), the linked Product object (key "product") and the linked Customer object (key "customer").

### Actor

- **create**: actor_created
- **update**: actor_updated
- **delete**: actor_deleted

Data row contains the linked Actor object (key "actor").

### Automatic pages

- **update**: automaticpages_updated

Data row contains the linked Automatic Page object (key "page").

### Blog Post
- **create**: blogpost_created
- **update**: blogpost_updated
- **delete**: blogpost_deleted

Data row contains the linked Blog Post object (key "blogpost").

### Blog Category
- **create**: blogcategory_created
- **update**: blogcategory_updated
- **delete**: blogcategory_deleted

Data row contains the linked Blog Category object (key "blogcategory").

### Category

- **create**: category_created
- **update**: category_updated
- **delete**: category_deleted

- **position updated**: category_position

Data row contains the linked Category object (key "category").

### CMS Page

- **create**: cmspage_created
- **update**: cmspage_updated
- **delete**: cmspage_deleted

Data row contains the linked CMS Page object (key "cmspage").

### CMS Category

- **create**: cmscategory_created
- **update**: cmscategory_updated
- **delete**: cmscategory_deleted

Data row contains the linked CMS Category object (key "cmscategory").

### Configuration

- **update**: configuration_updated

Data row contains the linked Configuration name and its value.

### Currency

- **update**: currency_updated
- **update all currencies**: currencies_updated

Data row contains the linked Currency object only for currency_updated (key "currency").

### Customer

- **create**: customer_created
- **update**: customer_updated
- **delete**: customer_deleted

Data row contains the linked Customer object (key "customer").

### Device

- **create**: device_created
- **update**: device_updated
- **delete**: device_deleted

Data row contains the linked Device object (key "device").

### Director

- **create**: director_created
- **update**: director_updated
- **delete**: director_deleted

Data row contains the linked Director object (key "director").

### Extracts
 - **create**: extract_created
 - **update**: extract_updated
 - **delete**: extract_deleted
 
 - **position updated**: extract_position

Data row contains the linked Extract object (key "extract").

### Features
 - **create**: feature_created
 - **update**: feature_updated
 - **delete**: feature_deleted

 - **position updated**: feature_position

Data row contains the linked Feature object (key "feature").

### Gift

- **sent**: gift_sent

Data row contains the linked Gift object (key "gift").

### Group

- **attach customer**: group_customer_attached
- **remove customer**: group_customer_removed

Data row contains the linked Customer object (key "customer") and the linked Customer Groups objects (key "groups").

### Language

- **update**: language_updated

Data row contains the linked Language object (key "language").

### Order

- **create**: order_created
- **history updated**: order_history

Data row contains the linked Order object (key "order") and the linked Customer object (key "customer").

For **order_history** event, we also provide the linked History object (key "history").

### Password Token

- **create**: password_token_created

Data row contains the linked Customer object (key "customer") and the generated Token (key "token").

### Prepayment Balance

- **create**: prepayment_balance_created
- **update**: prepayment_balance_updated

Data row contains the linked Prepayment Balance object (key "balance").

### Prepayment Operation

- **create**: prepayment_operation_created
- **update**: prepayment_operation_updated
- **delete**: prepayment_operation_deleted

Data row contains the linked Prepayment Operation object (key "operation").

### Prepayment Recharge

- **create**: prepayment_recharge_created
- **update**: prepayment_recharge_updated
- **delete**: prepayment_recharge_deleted

Data row contains the linked Prepayment Recharge object (key "recharge").

### Prepayment Bonus

- **create**: prepayment_bonus_created
- **update**: prepayment_bonus_updated
- **delete**: prepayment_bonus_deleted

Data row contains the linked Prepayment Bonus object (key "bonus").

### Product

- **create**: product_created
- **update**: product_updated
- **delete**: product_deleted

- **position updated**: product_position

- **product attached/detached**: product_products_updated
- **director attached/detached**: product_directors_updated
- **actor attached/detached**: product_actors_updated

Data row contains the linked Product object (key "product").

For **product_position** event, we also provide the linked Category object (key "category").

For **product_products_updated** event, we also provide the linked Product object (key "product_linked") and the action (key "action").

For **product_directors_updated** event, we also provide the linked Director object (key "director") and the action (key "action").

For **product_actors_updated** event, we also provide the linked Actor object (key "actor") and the action (key "action").

 ### Stripe payment gateway

 - **pending payment (requires action - SCA)**: stripe_pending

Data row contains the linked Stripe Invoice object (key "invoice").

### Subscription Access

- **create**: subscription_created
- **renew**: subscription_renewed
- **stop**: subscription_stopped

- **renew failed**: subscription_error

Data row contains the linked Subscription object (key "subscription") and the linked Customer object (key "customer").

For **subscription_error** event, we also provide a key "payment_method" with the Payment name.

For **subscription_stopped** event, we also provide the linked Access object (key "access").

### Video

- **create**: video_created
- **update**: video_updated
- **delete**: video_deleted

 - **position updated**: video_position

Data row contains the linked Video object (key "video").

### Widget Footer Menu

 - **create**: footermenu_created
 - **update**: footermenu_updated
 - **delete**: footermenu_deleted

Data row contains the linked Footer Menu object (key "footermenu").

### Widget Hook Phrase

 - **create**: hookphrase_created
 - **update**: hookphrase_updated
 - **delete**: hookphrase_deleted

Data row contains the linked Hook Phrase object (key "hookphrase").

 ### Widget Slider

 - **create**: slider_created
 - **update**: slider_updated
 - **delete**: slider_deleted

Data row contains the linked Slider object (key "slider").

### Widget Top Menu

 - **create**: topmenu_created
 - **update**: topmenu_updated
 - **delete**: topmenu_deleted

Data row contains the linked Top Menu object (key "topmenu").
