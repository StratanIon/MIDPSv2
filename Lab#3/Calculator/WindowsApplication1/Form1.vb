Public Class Form1
    Public Value1, Value2 As Double
    Dim num As Double
    Dim num2 As Double
    Dim result As Double
    Dim Ope As Double

    Private Shared Property Oper As String

    Private Sub Form1_Load(sender As Object, e As EventArgs) Handles MyBase.Load

    End Sub

    Private Sub TextBox2_TextChanged(sender As Object, e As EventArgs)

    End Sub

    Private Sub TextBox1_TextChanged(sender As Object, e As EventArgs) Handles TextBox1.TextChanged

    End Sub


    Private Sub Button2_Click(sender As Object, e As EventArgs) Handles Button2.Click
        If (TextBox1.Text = "0") Then

            TextBox1.Clear()
        End If
        TextBox1.AppendText(7)
    End Sub

    Private Sub Button17_Click(sender As Object, e As EventArgs) Handles Button17.Click
        If (TextBox1.Text = "0") Then

            TextBox1.Clear()
        End If
        TextBox1.AppendText(8)
    End Sub

    Private Sub Button3_Click(sender As Object, e As EventArgs) Handles Button3.Click
        If (TextBox1.Text = "0") Then

            TextBox1.Clear()
        End If
        TextBox1.AppendText(9)
    End Sub

    Private Sub Button6_Click(sender As Object, e As EventArgs) Handles Button6.Click
        If (TextBox1.Text = "0") Then

            TextBox1.Clear()
        End If
        TextBox1.AppendText(4)
    End Sub

    Private Sub Button5_Click(sender As Object, e As EventArgs) Handles Button5.Click
        If (TextBox1.Text = "0") Then

            TextBox1.Clear()
        End If
        TextBox1.AppendText(5)
    End Sub

    Private Sub Button4_Click(sender As Object, e As EventArgs) Handles Button4.Click
        If (TextBox1.Text = "0") Then

            TextBox1.Clear()
        End If
        TextBox1.AppendText(6)
    End Sub

    Private Sub Button9_Click(sender As Object, e As EventArgs) Handles Button9.Click
        If (TextBox1.Text = "0") Then

            TextBox1.Clear()
        End If
        TextBox1.AppendText(1)
    End Sub

    Private Sub Button8_Click(sender As Object, e As EventArgs) Handles Button8.Click
        If (TextBox1.Text = "0") Then

            TextBox1.Clear()
        End If
        TextBox1.AppendText(2)
    End Sub

    Private Sub Button7_Click(sender As Object, e As EventArgs) Handles Button7.Click
        If (TextBox1.Text = "0") Then

            TextBox1.Clear()
        End If
        TextBox1.AppendText(3)
    End Sub

    Private Sub Button16_Click(sender As Object, e As EventArgs) Handles Button16.Click
        If (TextBox1.Text = "0") Then

            TextBox1.Clear()
        End If
        TextBox1.AppendText(0)
    End Sub

    Private Sub Button18_Click(sender As Object, e As EventArgs) Handles Button18.Click
          Dim dot As Boolean

          dot = False




          For Each character As Char In TextBox1.Text
               If (character = ".") Then
                    dot = True
               End If
          Next

          If Not dot Then
               TextBox1.Text = (TextBox1.Text & ".")
          End If





     End Sub

    Private Sub Button10_Click(sender As Object, e As EventArgs) Handles Button10.Click
        Ope = 1
        num = Val(TextBox1.Text)
        Label1.Text = TextBox1.Text
        Label2.Text = "+"
        TextBox1.Clear()
    End Sub

    Private Sub Button1_Click(sender As Object, e As EventArgs) Handles Button1.Click
        Ope = 2
        num = Val(TextBox1.Text)
        Label1.Text = TextBox1.Text
        Label2.Text = "-"
        TextBox1.Clear()
    End Sub

    Private Sub Button12_Click(sender As Object, e As EventArgs) Handles Button12.Click
        Ope = 3
        num = Val(TextBox1.Text)
        Label1.Text = TextBox1.Text
        Label2.Text = "*"
        TextBox1.Clear()
    End Sub

    Private Sub Button13_Click(sender As Object, e As EventArgs) Handles Button13.Click
        Ope = 4
        num = Val(TextBox1.Text)
        Label1.Text = TextBox1.Text
        Label2.Text = "/"
        TextBox1.Clear()
    End Sub

    Private Sub Button15_Click(sender As Object, e As EventArgs) Handles Button15.Click
        num2 = Val(TextBox1.Text)
        Label3.Text = num2
        If Ope = 1 Then
            result = num + num2
            TextBox1.Text = result
        End If

        If Ope = 2 Then
            result = num - num2
            TextBox1.Text = result
        End If

        If Ope = 3 Then
            result = num * num2
            TextBox1.Text = result
        End If

        If Ope = 4 Then
            result = num / num2
            TextBox1.Text = result
        End If

        If Ope = 5 Then
            result = num ^ num2
            TextBox1.Text = result
        End If


    End Sub

    Private Sub Button14_Click(sender As Object, e As EventArgs) Handles Button14.Click
        TextBox1.Clear()
        Label1.Text = ""
        Label2.Text = ""
        Label3.Text = ""

    End Sub

    Private Sub Button19_Click(sender As Object, e As EventArgs) Handles Button19.Click
        Dim sqrt As Double
        sqrt = Convert.ToDouble(TextBox1.Text)
        TextBox1.Text = Convert.ToString(Math.Sqrt(sqrt))

    End Sub

    Private Sub Button20_Click(sender As Object, e As EventArgs) Handles Button20.Click
        Dim numb As Double
        numb = Convert.ToDouble(TextBox1.Text)
        Dim nu As Double
        nu = numb - numb - numb
        TextBox1.Text = Convert.ToString(nu)
    End Sub








    Private Sub Button25_Click(sender As Object, e As EventArgs) Handles Button25.Click

          TextBox1.Text = Math.Log(TextBox1.Text)
    End Sub

    Private Sub Button26_Click(sender As Object, e As EventArgs) Handles Button26.Click

          TextBox1.Text = Math.Log10(TextBox1.Text)
    End Sub

    Private Sub Button21_Click(sender As Object, e As EventArgs) Handles Button21.Click

          TextBox1.Text = Math.Sin(TextBox1.Text)
    End Sub

    Private Sub Button22_Click(sender As Object, e As EventArgs) Handles Button22.Click

          TextBox1.Text = Math.Cos(TextBox1.Text)
    End Sub

    Private Sub Button23_Click(sender As Object, e As EventArgs) Handles Button23.Click

          TextBox1.Text = Math.Tan(TextBox1.Text)
    End Sub

    Private Sub Button24_Click(sender As Object, e As EventArgs) Handles Button24.Click

          TextBox1.Text = Math.Exp(TextBox1.Text)
    End Sub

    Private Sub Button27_Click(sender As Object, e As EventArgs) Handles Button27.Click
        TextBox1.Text = "0"
    End Sub

    Private Sub Button28_Click(sender As Object, e As EventArgs) Handles Button28.Click
        If TextBox1.Text < " " Then
            TextBox1.Text = Mid(TextBox1.Text, 1, Len(TextBox1.Text) - 1 + 1)
        Else
            TextBox1.Text = Mid(TextBox1.Text, 1, Len(TextBox1.Text) - 1)
        End If



    End Sub



    Private Sub Button29_Click(sender As Object, e As EventArgs) Handles Button29.Click
        Dim value1 As Double
        value1 = Convert.ToDouble(TextBox1.Text)
        Value2 = "2"
        TextBox1.Text = Math.Pow(value1, Value2)
    End Sub

    Private Sub Button11_Click_1(sender As Object, e As EventArgs) Handles Button11.Click
        Ope = 5
        num = Val(TextBox1.Text)
        Label1.Text = TextBox1.Text
        Label2.Text = "x^y"
        TextBox1.Clear()


    End Sub

    Private Sub Label1_Click(sender As Object, e As EventArgs) Handles Label1.Click

    End Sub
End Class
