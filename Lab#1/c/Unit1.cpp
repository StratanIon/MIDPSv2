//---------------------------------------------------------------------------

#include <vcl.h>
#pragma hdrstop

#include "Unit1.h"
#include "dos.h"
#include "stdio.h"
//---------------------------------------------------------------------------
#pragma package(smart_init)
#pragma resource "*.dfm"
TForm1 *Form1;
struct date d;
struct time t;

//---------------------------------------------------------------------------
__fastcall TForm1::TForm1(TComponent* Owner)
        : TForm(Owner)
{

}
//---------------------------------------------------------------------------

void __fastcall TForm1::Timer1Timer(TObject *Sender)
{
char buf[20];
getdate(&d);
gettime(&t);
sprintf(buf,"%02d-%02d-%4d %02d:%02d:%02d",d.da_day,d.da_mon,d.da_year,
t.ti_hour,t.ti_min,t.ti_sec);
Edit1->Text=(AnsiString)buf;

}
//---------------------------------------------------------------------------

void __fastcall TForm1::Button3Click(TObject *Sender)
{
Close();        
}
//---------------------------------------------------------------------------
void __fastcall TForm1::PaintBox1Click(TObject *Sender)
{
       // PaintBox1->Canvas->Pen->Color = clBlack;


}
//---------------------------------------------------------------------------
int width;
int height;
int x;
int y;
void DrawLine()
{
        y = (height / 2.0) + (rand() % 41 - 20);
        Form1->PaintBox1->Canvas->LineTo(++x, y);
        Form1->Panel2->Height = y;

}
void DrawLine(int width, int height);


void __fastcall TForm1::Button1Click(TObject *Sender)
{

        PaintBox1->Repaint();
        PaintBox1->Canvas->Pen->Color = clRed;
        width = Form1->PaintBox1->Width;
        height = Form1->PaintBox1->Height;
        x = 0;
        Form1->PaintBox1->Canvas->MoveTo(0, height / 2.0);
        Button2->Enabled = true;
        Button1->Enabled = false;
        Timer2->Enabled = true;


}
//---------------------------------------------------------------------------

void __fastcall TForm1::Timer2Timer(TObject *Sender)
{
        if(x == width)
        Button2Click(Sender);
        DrawLine();
}
//---------------------------------------------------------------------------

void __fastcall TForm1::Button2Click(TObject *Sender)
{
        Timer2->Enabled = false;
        Button1->Enabled = true;
        Button2->Enabled = false;
}
//---------------------------------------------------------------------------







void __fastcall TForm1::PaintBox1Paint(TObject *Sender)
{
         PaintBox1->Canvas->Brush->Color = clBlack;
        PaintBox1->Canvas->Brush->Style = bsCross;
        PaintBox1->Canvas->Rectangle(0,250,250,0);
}
//---------------------------------------------------------------------------

