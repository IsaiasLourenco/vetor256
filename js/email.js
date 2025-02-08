var email = new MailMessage(from, to) 
{ 
    Assunto = "Novo Orçamento", 
    IsBodyHtml = verdadeiro, 
    BodyEncoding = Encoding.GetEncoding("utf-8")

}; 

email.Headers.Add("Content-Type", "text/html; charset=UTF-8"); 

var bodyText = new TextPart("html") ;
{ 
    Texto = "mensagem_msg",
    ContentTransferEncoding = ContentEncoding.QuotedPrintable; 
    ContentId = MimeUtils.GenerateMessageId();
    ContentId = new ContentType("Assunto", "Texto", "html") 
}; 

bodyText.ContentType.Charset = "utf-8";
email.BodyParts.Add(bodyText); 