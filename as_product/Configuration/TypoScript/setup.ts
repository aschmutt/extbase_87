
plugin.tx_asproduct_pi1 {
  view {
    templateRootPaths.0 = EXT:as_product/Resources/Private/Templates/
    templateRootPaths.1 = plugin.tx_asproduct_pi1.view.templateRootPath
    partialRootPaths.0 = EXT:as_product/Resources/Private/Partials/
    partialRootPaths.1 = plugin.tx_asproduct_pi1.view.partialRootPath
    layoutRootPaths.0 = EXT:as_product/Resources/Private/Layouts/
    layoutRootPaths.1 = plugin.tx_asproduct_pi1.view.layoutRootPath
  }
  persistence {
    storagePid = plugin.tx_asproduct_pi1.persistence.storagePid
    #recursive = 1
  }
  features {
    #skipDefaultArguments = 1
  }
  mvc {
    #callDefaultActionIfActionCantBeResolved = 1
  }
}

