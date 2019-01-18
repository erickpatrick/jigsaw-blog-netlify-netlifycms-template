@extends('_layouts.admin')

@push('meta')
<script src="https://identity.netlify.com/v1/netlify-identity-widget.js"></script>
@endpush

@push('scriptsBeforeBodyend')
<script src="https://unpkg.com/netlify-cms@^2.0.0/dist/netlify-cms.js"></script>
<script>
if (window.netlifyIdentity) {
    window.netlifyIdentity.on("init", user => {
        if (!user) {
            window.netlifyIdentity.on("login", () => {
                document.location.href = "/admin/";
            });
        }
    });
}
</script>
@endpush
