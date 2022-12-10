#Torio, Ralph Jufred P.
from django.contrib import admin
from .models import CourseTable
from .models import ExamTable
from .models import QuestionTable
from .models import StudentAccount

# Register function is used to add models to the Django admin so that data for those models can be created, deleted, updated and queried through the user interface.
class Course_Table(admin.ModelAdmin):
    list_display = ["course_name", "course_date_created"]
    ordering = ["course_name"]
   
    
admin.site.register(CourseTable, Course_Table)

class Exam_Table(admin.ModelAdmin):
    list_display = ["exam_title", "time_limit", "question_limit", "exam_description", "date_created",]
    ordering = ["exam_title",]
    
admin.site.register(ExamTable, Exam_Table)

class Question_Table(admin.ModelAdmin):
    list_display = ["question", "choice1", "choice2", "choice3", "choice4", "answer", "exam_status"]
    ordering = ["exam"]
   
admin.site.register(QuestionTable, Question_Table)

class Student_Account(admin.ModelAdmin):
    list_display = ["student_name", "student_course", "student_gender", "student_birthdate", "student_level", "student_email", "student_status"]
    search_fields = ["student_name", "student_course", "student_gender", "student_birthdate", "student_level", "student_email", "student_status"]
    search_fields = ["student_name", "student_course", "student_gender", "student_birthdate", "student_level", "student_email", "student_status"]
    
admin.site.register(StudentAccount, Student_Account)

#Changes some part of the site.
admin.site.site_header = "Teacher's Module"                   
admin.site.index_title = "Teacher's Module"                 
admin.site.site_title = 'Phyton Django'               



