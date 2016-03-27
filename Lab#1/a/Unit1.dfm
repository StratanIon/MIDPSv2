object Form1: TForm1
  Left = 192
  Top = 125
  Width = 453
  Height = 339
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
  object Label1: TLabel
    Left = 120
    Top = 24
    Width = 303
    Height = 25
    Caption = 'Incrementare decrementare contor '
    Font.Charset = DEFAULT_CHARSET
    Font.Color = clRed
    Font.Height = -20
    Font.Name = 'MS Sans Serif'
    Font.Style = []
    ParentFont = False
  end
  object Label2: TLabel
    Left = 216
    Top = 72
    Width = 127
    Height = 24
    Caption = 'i scade in Edit1'
    Font.Charset = DEFAULT_CHARSET
    Font.Color = clWindowText
    Font.Height = -19
    Font.Name = 'MS Sans Serif'
    Font.Style = []
    ParentFont = False
  end
  object Button1: TButton
    Left = 32
    Top = 80
    Width = 75
    Height = 25
    Caption = 'Up'
    TabOrder = 0
    OnClick = Button1Click
  end
  object Button2: TButton
    Left = 32
    Top = 176
    Width = 75
    Height = 25
    Caption = 'Down'
    TabOrder = 1
    OnClick = Button2Click
  end
  object Edit1: TEdit
    Left = 120
    Top = 128
    Width = 161
    Height = 21
    TabOrder = 2
    Text = 'Edit1'
  end
  object Button3: TButton
    Left = 304
    Top = 240
    Width = 75
    Height = 25
    Caption = 'Exit'
    TabOrder = 3
    OnClick = Button3Click
  end
end
