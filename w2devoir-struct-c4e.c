/*
Write enumerated types that supports dates—such as december 12. 
Then add a function that produces a next day.  
So nextday(date) of december 12 is december 13. 
Also write a function printdate(date) that prints a date legibly.

The function can assume that February has 28 days 
and it most know how many days are in each month. 
Use a struct with two members; 
one is the month and the second  is the day of the month—an int (or short).

Then print out  the date January 1  and print  the next day Jan 2.

Do this for the following dates:  
February 28, March 14, October 31, and  December 31.
*/
#include<stdio.h>

//typedef data_type alias;
//typedef enum month{jan=31,feb=28,mar=31,apr=30,may=31,jun=30,jul=31,aug=31,sep=31,oct=31,nov=30,dec=31} month;
typedef enum month{jan,feb,mar,apr,may,jun,jul,aug,sep,oct,nov,dec} month;
typedef struct date{month m;int d;} date;
date nextday(date d);
int howmanydays(month m);

int main(void){
    //
    date d;
    d.m=feb;
    d.d=28;
    //
    date d2={mar,14};
    //
    date d3={oct,31};
    //
    date d4={dec,31};
    //
    //
    int days_in_curr_month=howmanydays(d.m);
    date next_day_struct=nextday(d);
    //printf("%d\n",next_day_struct.m);
    printf("Date: month %d day %d\n has %d days",d.m+1,d.d,days_in_curr_month);
    return 0;
}

date nextday(date d){
    //
    date next_day_return,ndr;
    if(d.d=28)
    ndr.m = d.m;
    ndr.d = d.d;
    //printf("%d %d\n",days_in_month,day);
    //
    //
    return next_day_return;
}

int howmanydays(month m){
    int days=30;
    switch(m){
        case jan:
        case mar:
        case may:
        case jul:
        case aug:
        case oct:
        case dec:
            days=31;
            break;
        case feb:
            days=28;
            break;
        default:
            days=30;
    }
    return days;
}