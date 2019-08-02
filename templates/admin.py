from django.contrib import admin
from django.contrib.auth.models import Group


admin.site.site_header="Admin  Dashboard"

class SnippetAdmin(admin.ModelAdmin):
    exclude=()

admin.site.register(Snippet)
admin.site.unregister(Group)