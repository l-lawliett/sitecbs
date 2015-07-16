jQuery(function($) {

    events = {
         '#reference'        : 'reference.created reference.deleted reference.updated'
        ,'#profile'          : 'profile.updated resume.uploaded culture.uploaded disc.uploaded values.uploaded company.updated'
        ,'#workexperience'   : 'workexperience.created workexperience.deleted workexperience.updated'
        ,'#membership'       : 'membership.created membership.deleted membership.updated'
        ,'#language'         : 'language.deleted language.created'
        ,'#education'        : 'schools.created schools.updated schools.deleted'
        ,'#skill'            : 'skills.created skills.updated skills.deleted'
        ,'#certification'   : 'certifications.created certifications.updated certifications.deleted'
        ,'#company'          : 'company.updated company.culture.uploaded'
        ,'#health'           : 'health.created health.updated'
        ,'#conviction'       : 'conviction.created conviction.updated conviction.deleted'
        ,'#applicant'        : 'applicant.created applicant.updated applicant.deleted'
    };

    $.each(events, function(target, event_list) {
        $(document).on(event_list, function(e, response) {
            $(target).html(response.data.html);
            $dialog = $('#dialog');
            if ($dialog.hasClass('in')) {
                $dialog.modal('hide');
            }
        });
    });


    $(document).on('job.approved job.recruiting job.draft job.closed job.shortlist job.closed', function(e, response) {
            window.location.reload();
            });

    $(document).on('comment.created', function(e, response) {
        if (response.data.success == true) {
            $('#messages').append(response.data.html);
            $('#comment').html(response.data.commentform);
        }
    });

    $(document).on('change', '#commentfile', function(e, data) {
        files = $('#commentfile').get(0).files;
        $('#file_lists').empty();
        for(var i=0, l=files.length; i < l; i++) {
            $('#file_lists').append('<li>' + files[i].name + '</li>');
        }
    });

});
