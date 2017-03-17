<?php

return [
    "DocNum" => "string",
    "SigningDate" => "string",
    "EffectiveDate" => "string",
    "PlanDateComptetion" => "string",
    "Validity" => "gisgkh\\types\\HouseManagement\\ContractType\\Validity",
    "Owners" => "string",
    "Cooperative" => "gisgkh\\types\\OrganizationsRegistryBase\\RegOrgType",
    "MunicipalHousing" => "gisgkh\\types\\OrganizationsRegistryBase\\RegOrgType",
    "BuildingOwner" => "gisgkh\\types\\OrganizationsRegistryBase\\RegOrgType",
    "Protocol" => "gisgkh\\types\\HouseManagement\\ContractType\\Protocol",
    "ProtocolAdd" => "gisgkh\\types\\HouseManagement\\ContractType\\Protocol\\ProtocolAdd",
    "ProtocolOK" => "gisgkh\\types\\Base\\AttachmentType",
    "ProtocolMeetingOwners" => "gisgkh\\types\\Base\\AttachmentType",
    "ProtocolMeetingBoard" => "gisgkh\\types\\Base\\AttachmentType",
    "ProtocolBuildingOwner" => "gisgkh\\types\\Base\\AttachmentType",
    "ContractBase" => "gisgkh\\types\\NsiBase\\nsiRef",
    "DateDetails" => "gisgkh\\types\\HouseManagement\\DateDetailsType",
    "ContractAttachment" => "gisgkh\\types\\Base\\AttachmentType",
    "AgreementAttachment" => "gisgkh\\types\\HouseManagement\\ContractType\\AgreementAttachment",
    "ImprintAgreement" => "gisgkh\\types\\HouseManagement\\ImprintAgreementType"
];
