<%@ page session="true" contentType="text/html; charset=ISO-8859-1" %>
<%@ taglib uri="http://www.tonbeller.com/jpivot" prefix="jp" %>
<%@ taglib prefix="c" uri="http://java.sun.com/jstl/core" %>

<jp:mondrianQuery
  id="query01"
  jdbcDriver="com.mysql.jdbc.Driver"
  jdbcUrl="jdbc:mysql://localhost/dw_sales?user=root&password="
  catalogUri="/WEB-INF/queries/dwoadw1.xml"
>
  select [Measures].[Sub Total] ON COLUMNS, {([Time_dimens].[All Times],[Customer].[All Customer],[Salesorder].[All Sales Order],[Credit_Card].[All Credit_Cards],[Territory])}
  ON ROWS from [Sales]
</jp:mondrianQuery>

<c:set var="title01" scope="session">Query DWO Sales using Mondrian OLAP</c:set>
