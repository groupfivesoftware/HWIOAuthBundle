Step 2x: Setup Pinterest
=======================
First you will have to register your application on Pinterest. Check out the
documentation for more information: https://developers.pinterest.com/docs/api/authentication/.

Next configure a resource owner of type `pinterest` with appropriate
`client_id`, `client_secret` and `scope`. Refer to the Facebook documentation
for the available scopes.

```yaml
# app/config/config.yml

hwi_oauth:
    resource_owners:
        any_name:
            type:                pinterest
            client_id:           <client_id>
            client_secret:       <client_secret>

When you're done. Continue by configuring the security layer or go back to
setup more resource owners.

> Bonus: Add [Facebook Connect](../bonus/facebook-connect.md) functionality.

- [Step 2: Configuring resource owners (Facebook, GitHub, Google, Windows Live and others](../2-configuring_resource_owners.md)
- [Step 3: Configuring the security layer](../3-configuring_the_security_layer.md).
