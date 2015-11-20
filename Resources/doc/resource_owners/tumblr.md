Step 2x: Setup Tumblr
=======================
First you will have to register your application on Tumblr. Check out the
documentation for more information: https://www.tumblr.com/docs/en/api/v2.

Next configure a resource owner of type `tumblr` with appropriate
`client_id`, `client_secret` and `scope`. Refer to the Facebook documentation
for the available scopes.

```yaml
# app/config/config.yml

hwi_oauth:
    resource_owners:
        any_name:
            type:                tumblr
            client_id:           <client_id>
            client_secret:       <client_secret>

When you're done. Continue by configuring the security layer or go back to
setup more resource owners.