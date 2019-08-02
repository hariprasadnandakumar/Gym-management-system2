from django import forms
from gym.models import Registration
  
class RegistrationForm(forms.ModelForm):  
    class Meta:  
        model = Registration  
        fields = "__all__"         