object Form1: TForm1
  Left = 192
  Top = 125
  Width = 528
  Height = 454
  Caption = 'MIDPS'
  Color = clBtnFace
  Font.Charset = DEFAULT_CHARSET
  Font.Color = clWindowText
  Font.Height = -11
  Font.Name = 'MS Sans Serif'
  Font.Style = []
  OldCreateOrder = False
  PixelsPerInch = 96
  TextHeight = 13
  object PaintBox1: TPaintBox
    Left = 224
    Top = 136
    Width = 250
    Height = 257
    OnClick = PaintBox1Click
    OnPaint = PaintBox1Paint
  end
  object Label1: TLabel
    Left = 296
    Top = 32
    Width = 90
    Height = 13
    Caption = 'Data si ora curente'
  end
  object Label2: TLabel
    Left = 160
    Top = 88
    Width = 326
    Height = 20
    Caption = 'Resurse grafice ale mediului C++ Builder'
    Font.Charset = DEFAULT_CHARSET
    Font.Color = clWindowText
    Font.Height = -16
    Font.Name = 'MS Sans Serif'
    Font.Style = [fsBold]
    ParentFont = False
  end
  object Button1: TButton
    Left = 48
    Top = 184
    Width = 75
    Height = 25
    Caption = 'Start'
    TabOrder = 0
    OnClick = Button1Click
  end
  object Button2: TButton
    Left = 48
    Top = 248
    Width = 75
    Height = 25
    Caption = 'Stop'
    TabOrder = 1
    OnClick = Button2Click
  end
  object Button3: TButton
    Left = 48
    Top = 312
    Width = 75
    Height = 25
    Caption = 'Exit'
    TabOrder = 2
    OnClick = Button3Click
  end
  object Edit1: TEdit
    Left = 296
    Top = 56
    Width = 121
    Height = 21
    TabOrder = 3
    Text = 'Edit1'
  end
  object Panel1: TPanel
    Left = 168
    Top = 136
    Width = 50
    Height = 257
    Color = clAppWorkSpace
    TabOrder = 4
  end
  object Panel2: TPanel
    Left = 168
    Top = 136
    Width = 50
    Height = 129
    Color = clBlack
    TabOrder = 5
  end
  object Timer1: TTimer
    OnTimer = Timer1Timer
    Left = 40
    Top = 32
  end
  object Timer2: TTimer
    Interval = 500
    OnTimer = Timer2Timer
    Left = 40
    Top = 80
  end
end
