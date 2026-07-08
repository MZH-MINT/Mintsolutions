(function ($) {
  'use strict';

  var config = window.mintsolutionsForms || {};
  var phoneLengthMap = {
    '+1': { min: 10, max: 10 },
    '+44': { min: 9, max: 10 },
    '+61': { min: 9, max: 9 },
    '+65': { min: 8, max: 8 },
    '+81': { min: 9, max: 10 },
    '+82': { min: 9, max: 10 },
    '+91': { min: 10, max: 10 },
    '+971': { min: 8, max: 9 },
    '+92': { min: 10, max: 10 },
    '+60': { min: 9, max: 10 },
    '+62': { min: 9, max: 12 },
    '+86': { min: 11, max: 11 },
    '+33': { min: 9, max: 9 },
    '+49': { min: 10, max: 11 },
    '+39': { min: 10, max: 10 },
    '+34': { min: 9, max: 9 },
    '+55': { min: 10, max: 11 },
    '+7': { min: 10, max: 10 }
  };

  var modalContext = {
    mailType: 'default',
    title: config.defaultTitle || 'Request a free Demo',
    noBodyPadding: false
  };

  function getDefaultCountryCode($form) {
    var $selected = $form.find('[name="country_code"] option[selected]').first();
    return $selected.length ? ($selected.val() || '+91') : '+91';
  }

  function getTargetEmail(mailType) {
    if (mailType === 'bgv' && config.emails && config.emails.bgv) {
      return config.emails.bgv;
    }

    return (config.emails && config.emails.default) || '';
  }

  function getCcEmail() {
    return (config.emails && config.emails.cc) || '';
  }

  function trimValue(value) {
    return String(value || '').trim();
  }

  function digitsOnly(value) {
    return trimValue(value).replace(/\D/g, '');
  }

  function isValidEmail(value) {
    return /^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,}$/.test(trimValue(value));
  }

  function getPhoneError(countryCode, phone) {
    var digits = digitsOnly(phone);

    if (!digits) {
      return 'Phone number is required';
    }

    var rule = phoneLengthMap[countryCode] || { min: 7, max: 15 };

    if (digits.length < rule.min || digits.length > rule.max) {
      return 'Phone must contain ' + rule.min + ' -' + rule.max + ' digits for the selected country (you entered ' + digits.length + ').';
    }

    return '';
  }

  function collectValues($form) {
    return {
      company_name: trimValue($form.find('[name="company_name"]').val()),
      full_name: trimValue($form.find('[name="full_name"]').val()),
      country_code: trimValue($form.find('[name="country_code"]').val()) || '+91',
      phone: trimValue($form.find('[name="phone"]').val()),
      email: trimValue($form.find('[name="email"]').val()),
      message: trimValue($form.find('[name="message"]').val())
    };
  }

  function computeErrors(values) {
    var errors = {};

    if (!values.company_name) {
      errors.company_name = 'Company name is required';
    }

    if (!values.full_name) {
      errors.full_name = 'Full name is required';
    }

    var phoneError = getPhoneError(values.country_code, values.phone);
    if (phoneError) {
      errors.phone = phoneError;
    }

    if (!values.email) {
      errors.email = 'Email is required';
    } else if (!isValidEmail(values.email)) {
      errors.email = 'Enter a valid email (e.g. user@domain.com)';
    }

    if (!values.message) {
      errors.message = 'Message is required';
    } else if (values.message.length < 10) {
      errors.message = 'Message must be at least 10 characters';
    }

    return errors;
  }

  function clearErrors($form) {
    $form.find('.validation-error').remove();
    $form.find('input, textarea, select').removeClass('input-invalid');
  }

  function fieldContainer($input) {
    return $input.closest('.input-holder').length ? $input.closest('.input-holder') : $input.parent();
  }

  function renderErrors($form, errors) {
    clearErrors($form);

    Object.keys(errors).forEach(function (name) {
      var $input = $form.find('[name="' + name + '"]').first();
      if (!$input.length) {
        return;
      }

      $input.addClass('input-invalid');
      fieldContainer($input).after('<div class="validation-error">' + errors[name] + '</div>');
    });
  }

  function updateSubmitState($form) {
    var errors = computeErrors(collectValues($form));
    $form.find('button[type="submit"]').prop('disabled', Object.keys(errors).length > 0);
  }

  function setSubmitState($form, sending) {
    var $button = $form.find('button[type="submit"]');
    $button.prop('disabled', sending || $button.prop('disabled'));
    $button.find('span').text(sending ? 'Sending...' : 'Submit');
    $form.data('sending', sending ? '1' : '0');
  }

  function resetForm($form) {
    var defaultCountryCode = getDefaultCountryCode($form);
    if ($form.length && $form[0]) {
      $form[0].reset();
    }
    $form.find('[name="country_code"]').val(defaultCountryCode);
    clearErrors($form);
    $form.data('sending', '0');
    $form.find('button[type="submit"] span').text('Submit');
    updateSubmitState($form);
  }

  function setStatusMessage($form, message, isError) {
    var $msg = $form.find('#formMsg');
    if (!$msg.length) {
      $msg = $('#formMsg');
    }
    if ($msg.length) {
      $msg.css('color', isError ? '#d93025' : '#2F9C43').text(message);
    }
  }

  function showToast(type, message, title, delay) {
    var toastEl = document.getElementById('globalToast');
    var titleEl = document.getElementById('globalToastTitle');
    var bodyEl = document.getElementById('globalToastBody');

    if (!toastEl || !titleEl || !bodyEl || !(window.bootstrap && window.bootstrap.Toast)) {
      return;
    }

    titleEl.textContent = title || (type === 'error' ? 'Error' : 'Request Sent');
    bodyEl.textContent = message;
    toastEl.setAttribute('data-bs-delay', String(delay || (type === 'error' ? 5000 : 3000)));
    toastEl.classList.remove('text-bg-danger', 'text-bg-success');
    toastEl.classList.add(type === 'error' ? 'text-bg-danger' : 'text-bg-success');

    var instance = window.bootstrap.Toast.getOrCreateInstance(toastEl);
    instance.show();
  }

  function applyModalContext() {
    var $modal = $('#enquirNow');
    if (!$modal.length) {
      return;
    }

    $modal.find('#enquirNowLabel').text(modalContext.title);
    $modal.find('.modal-body').toggleClass('no-body-padding', !!modalContext.noBodyPadding);
    $modal.find('form').attr('data-mail-type', modalContext.mailType);
  }

  function resetModalContext() {
    modalContext = {
      mailType: 'default',
      title: config.defaultTitle || 'Request a free Demo',
      noBodyPadding: false
    };
    applyModalContext();
  }

  function emailJsPayload(values, targetEmail, mailType) {
    return {
      service_id: config.emailjs.serviceId,
      template_id: config.emailjs.templateId,
      user_id: config.emailjs.publicKey,
      template_params: {
        name: values.full_name,
        company_name: values.company_name || '—',
        email: values.email,
        phone: $.trim((values.country_code || '') + ' ' + values.phone),
        message: values.message,
        subject: 'New Inquiry from ' + (values.company_name || values.full_name),
        to_email: targetEmail,
        inquiry_title: mailType === 'bgv' ? 'New BGV Inquiry' : 'New Website Inquiry',
        cc_email: getCcEmail()
      }
    };
  }

  function sendViaEmailJs(values, targetEmail, mailType) {
    if (!(config.emailjs && config.emailjs.serviceId && config.emailjs.templateId && config.emailjs.publicKey)) {
      return Promise.reject(new Error('Missing EmailJS configuration'));
    }

    return fetch('https://api.emailjs.com/api/v1.0/email/send', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json'
      },
      body: JSON.stringify(emailJsPayload(values, targetEmail, mailType))
    }).then(function (response) {
      if (!response.ok) {
        return response.text().then(function (text) {
          throw new Error(text || 'EmailJS request failed');
        });
      }
    });
  }

  function sendViaAjaxFallback(values, targetEmail, mailType) {
    return $.ajax({
      url: config.ajaxUrl,
      method: 'POST',
      dataType: 'json',
      data: {
        action: 'mintsolutions_submit_enquiry',
        nonce: config.nonce,
        company_name: values.company_name,
        full_name: values.full_name,
        country_code: values.country_code,
        phone: values.phone,
        email: values.email,
        message: values.message,
        target_email: targetEmail,
        mail_type: mailType
      }
    });
  }

  function closeModalIfPresent($form) {
    var modalEl = document.getElementById('enquirNow');
    if (!$form.closest('#enquirNow').length || !modalEl || !(window.bootstrap && window.bootstrap.Modal)) {
      return;
    }

    var instance = window.bootstrap.Modal.getInstance(modalEl) || new window.bootstrap.Modal(modalEl);
    instance.hide();
  }

  function handleSuccess($form) {
    var message = (config.messages && config.messages.success) || 'Your enquiry was sent successfully.';
    showToast('success', message, 'Request Sent', 3000);
    setStatusMessage($form, message, false);
    resetForm($form);
    closeModalIfPresent($form);
  }

  function handleFailure($form, responseMessage) {
    var message = responseMessage || ((config.messages && config.messages.error) || 'Failed to send enquiry. Please try again later.');
    showToast('error', message, 'Request Failed', 5000);
    setStatusMessage($form, message, true);
  }

  function bindForm($form) {
    if (!$form.length || $form.data('forms-init') === '1') {
      return;
    }

    $form.data('forms-init', '1');
    updateSubmitState($form);

    $form.on('input.forms change.forms blur.forms', 'input, textarea, select', function () {
      var values = collectValues($form);
      var errors = computeErrors(values);
      var fieldName = $(this).attr('name');

      clearErrors($form);
      if (fieldName && errors[fieldName] && ($(this).data('touched') || $(this).is(':focus') === false)) {
        var fieldErrors = {};
        fieldErrors[fieldName] = errors[fieldName];
        renderErrors($form, fieldErrors);
      }

      updateSubmitState($form);
    });

    $form.on('focusout.forms', 'input, textarea, select', function () {
      $(this).data('touched', '1');
    });

    $form.on('submit.forms', function (event) {
      event.preventDefault();

      if ($form.data('sending') === '1') {
        return;
      }

      var values = collectValues($form);
      var errors = computeErrors(values);
      var mailType = $form.attr('data-mail-type') || 'default';
      var targetEmail = getTargetEmail(mailType);

      if (Object.keys(errors).length > 0) {
        renderErrors($form, errors);
        updateSubmitState($form);
        return;
      }

      setStatusMessage($form, '', false);
      setSubmitState($form, true);

      sendViaEmailJs(values, targetEmail, mailType)
        .then(function () {
          handleSuccess($form);
        })
        .catch(function () {
          return sendViaAjaxFallback(values, targetEmail, mailType)
            .done(function (response) {
              if (response && response.success) {
                handleSuccess($form);
                return;
              }

              var message = response && response.data && response.data.message ? response.data.message : '';
              if (response && response.data && response.data.fieldErrors) {
                renderErrors($form, response.data.fieldErrors);
              }
              handleFailure($form, message);
            })
            .fail(function (xhr) {
              var response = xhr && xhr.responseJSON ? xhr.responseJSON : null;
              if (response && response.data && response.data.fieldErrors) {
                renderErrors($form, response.data.fieldErrors);
              }
              handleFailure($form, response && response.data ? response.data.message : '');
            });
        })
        .finally(function () {
          setSubmitState($form, false);
          updateSubmitState($form);
        });
    });
  }

  $(document).ready(function () {
    bindForm($('#requestDemoForm'));
    bindForm($('#contactForm'));

    $(document).on('click.forms', '[data-bs-target="#enquirNow"], [href="#enquirNow"]', function () {
      modalContext.mailType = this.dataset.mailType || 'default';
      modalContext.title = this.dataset.modalTitle || config.defaultTitle || 'Request a free Demo';
      modalContext.noBodyPadding = this.dataset.noBodyPadding === '1';
      applyModalContext();
    });

    $('#enquirNow').on('hidden.bs.modal', function () {
      resetModalContext();
      resetForm($('#requestDemoForm'));
    });

    applyModalContext();
  });
})(jQuery);