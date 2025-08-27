# Ibexa enhanced migrations

This bundle provides additional migration features to the native Ibexa DXP migrations bundle (available in ibexa content, ibexa experience and ibexa commerce).

## Features

Custom functions that can be used in migration files ([official documentation](https://doc.ibexa.co/en/5.0/content_management/data_migration/importing_data/#custom-functions)):

* content_id_from_content_remote_id("<remote-id>") : load a content from its remote id and return its content id
* location_id_from_content_remote_id("<remote-id>") : load a content from its remote id and return its main location id
* location_path_string_from_content_remote_id("<remote-id>") : load a content from its remote id and return its main location path string
* content_id_from_location_remote_id("<remote-id>") : load a location from its remote id and return its content id
* location_id_from_location_remote_id("<remote-id>") : load a location from its remote id and return its location id
* location_path_string_from_location_remote_id("<remote-id>") : load a location from its remote id and return its path string

Example of usage in a migration file:

```yaml
-
    type: role
    mode: update
    match:
        field: identifier
        value: 'Anonymous'
    policies:
        mode: append
        list:
            -
                module: content
                function: read
                limitations:
                    - { identifier: Node, values: [ '###XXX location_id_from_content_remote_id("my_remote_id") XXX###' ] }
 
```
